<?php

/*********************************************************************

 freo | サイトマップ生成 (2016/01/04) by.holydragoon.jp

 Copyright(C) 2009-2016 freo.jp
 Copyright(C) 2012-2016 holydragoon.jp

*********************************************************************/

//外部ファイル読み込み
require_once FREO_MAIN_DIR . 'freo/internals/security_entry.php';
require_once FREO_MAIN_DIR . 'freo/internals/filter_entry.php';
require_once FREO_MAIN_DIR . 'freo/internals/security_page.php';
require_once FREO_MAIN_DIR . 'freo/internals/filter_page.php';

/* メイン処理 */
function freo_page_sitemap()
{
	global $freo;

	//パラメータ検証
	if (!isset($_GET['page']) or !preg_match('/^\d+$/', $_GET['page']) or $_GET['page'] < 1) {
		$_GET['page'] = 1;
	}

	//配信除外ページの指定
	$forbidden_condition = null;
	$forbiddens = explode("\n", $freo->config['plugin']['sitemap']['forbidden_page']);

	foreach ($forbiddens as $forbidden) {
		if (!$forbidden) {
			continue;
		} else {
			$forbidden_condition .= ' AND (id NOT LIKE ' . $freo->pdo->quote( $forbidden . '/%') . ' OR id NOT LIKE ' . $freo->pdo->quote( $forbidden . '/%') . ' OR id NOT LIKE ' . $freo->pdo->quote( $forbidden . '/%') . ') AND (id NOT LIKE ' . $freo->pdo->quote( $forbidden . '%') . ' OR id NOT LIKE ' . $freo->pdo->quote( $forbidden . '%') . ' OR id NOT LIKE ' . $freo->pdo->quote( $forbidden . '%') . ')';
		}
	}

	$condition = null;
	$condition .= ' AND display = \'publish\'';

	//制限されたページを一覧に表示しない
	if (!$freo->config['view']['restricted_display'] and ($freo->user['authority'] != 'root' and $freo->user['authority'] != 'author')) {
		$page_filters = freo_filter_page('user', array_keys($freo->refer['pages']));
		$page_filters = array_keys($page_filters, true);
		$page_filters = array_map(array($freo->pdo, 'quote'), $page_filters);
		if (!empty($page_filters)) {
			$condition .= ' AND id NOT IN(' . implode(',', $page_filters) . ')';
		}

		$page_securities = freo_security_page('user', array_keys($freo->refer['pages']), array('password'));
		$page_securities = array_keys($page_securities, true);
		$page_securities = array_map(array($freo->pdo, 'quote'), $page_securities);
		if (!empty($page_securities)) {
			$condition .= ' AND id NOT IN(' . implode(',', $page_securities) . ')';
		}
	}

	//ページ取得
	$stmt = $freo->pdo->prepare('SELECT * FROM ' . FREO_DATABASE_PREFIX . 'pages WHERE approved = \'yes\' AND (status = \'publish\' OR (status = \'future\' AND datetime <= :now1)) AND (close IS NULL OR close >= :now2)' . $condition . $forbidden_condition .' ORDER BY id');
		$stmt->bindValue(':now1', date('Y-m-d H:i:s'));
		$stmt->bindValue(':now2', date('Y-m-d H:i:s'));

	$flag = $stmt->execute();
	if (!$flag) {
		freo_error($stmt->errorInfo());
	}

	$articles = array();
	while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$articles[] = array(
			'id'          => $data['id'],
			'modified'    => $data['modified']
		);
	}

	$sitemap_update = null;
	//最終更新日時取得
	$stmt = $freo->pdo->prepare('SELECT MAX(datetime) FROM ' . FREO_DATABASE_PREFIX . 'pages WHERE datetime <= :now ORDER BY datetime DESC');
	$stmt->bindValue(':now',  date('Y-m-d H:i:s'));
	$flag = $stmt->execute();
	if (!$flag) {
		freo_error($stmt->errorInfo());
	}

	$data            = $stmt->fetch(PDO::FETCH_NUM);
	$sitemap_update  = $data[0];

	$entry_articles = array();
	if ($freo->config['plugin']['sitemap']['entry_make']) {
		$entry_condition = null;
		$entry_condition .= ' AND display = \'publish\'';
		
		//制限されたエントリーを一覧に表示しない
		if (!$freo->config['view']['restricted_display'] and ($freo->user['authority'] != 'root' and $freo->user['authority'] != 'author')) {
			$entry_filters = freo_filter_entry('user', array_keys($freo->refer['entries']));
			$entry_filters = array_keys($entry_filters, true);
			$entry_filters = array_map('intval', $entry_filters);
			if (!empty($entry_filters)) {
				$entry_condition .= ' AND id NOT IN(' . implode(',', $entry_filters) . ')';
			}

			$entry_securities = freo_security_entry('user', array_keys($freo->refer['entries']), array('password'));
			$entry_securities = array_keys($entry_securities, true);
			$entry_securities = array_map('intval', $entry_securities);
			if (!empty($entry_securities)) {
				$entry_condition .= ' AND id NOT IN(' . implode(',', $entry_securities) . ')';
			}
		}
		
		//エントリー取得
		$stmt = $freo->pdo->prepare('SELECT id, code, modified FROM ' . FREO_DATABASE_PREFIX . 'entries WHERE approved = \'yes\' AND (status = \'publish\' OR (status = \'future\' AND datetime <= :now1)) AND (close IS NULL OR close >= :now2)' . $entry_condition . ' ORDER BY id');
		$stmt->bindValue(':now1', date('Y-m-d H:i:s'));
		$stmt->bindValue(':now2', date('Y-m-d H:i:s'));
		$flag = $stmt->execute();

		if (!$flag) {
			freo_error($stmt->errorInfo());
		}

		while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$entry_articles[] = array(
				'id'          => $data['id'],
				'code'        => $data['code'],
				'modified'    => $data['modified']
			);
		}
		
		//ページがない場合の最終更新日時取得
		$stmt = $freo->pdo->prepare('SELECT MAX(modified) FROM ' . FREO_DATABASE_PREFIX . 'entries WHERE modified <= :now ORDER BY modified DESC');
		$stmt->bindValue(':now',  date('Y-m-d H:i:s'));

		$flag = $stmt->execute();
		if (!$flag) {
			freo_error($stmt->errorInfo());
		}

		$data            = $stmt->fetch(PDO::FETCH_NUM);
		$sitemap_update  = $data[0];
	}


	//ページもエントリーもない場合の最終更新日生成
	//ユーザー情報取得
	$stmt = $freo->pdo->prepare('SELECT created FROM ' . FREO_DATABASE_PREFIX . 'users WHERE authority = \'root\' AND created <= :now ORDER BY created');
	$stmt->bindValue(':now',  date('Y-m-d H:i:s'));
	$flag = $stmt->execute();
	if (!$flag) {
		freo_error($stmt->errorInfo());
	}

	$data         = $stmt->fetch(PDO::FETCH_NUM);
	$user_update  = $data[0];

	//データ割当
	$freo->smarty->assign(array(
		'articles'        => $articles,
		'entry_articles'  => $entry_articles,
		'sitemap_update'  => $sitemap_update,
		'user_update'     => $user_update
	));

	return;
}

?>