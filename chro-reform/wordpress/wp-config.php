<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress_reform');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'dasp13*dran');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wM&|p)ECpkn|d#O88Y:oI-Q-1DcD?x#XKST9faz%So~/E.+[P>RP<JxbD{{9U]P>');
define('SECURE_AUTH_KEY',  'sXo-;|y>{Ha_W92];Lk}/]|RRR&I,,/oH4;:>#OdP.FFD1s!L+Q41fjAeK.?L;ed');
define('LOGGED_IN_KEY',    '(#&{gazr|IHJiwU1hN]Uc)M6MmXS:M|u_NRz7aUM_lA-`Kr|W<BQEZdaNKP[SQq]');
define('NONCE_KEY',        '=_?oiY}QB0E:*{yL^tazFF5ixWfn|d=`x2MU%#tc10M,EoHJs=_bo}XUF2H.O2*p');
define('AUTH_SALT',        ',{ME~TTo,mp4DPk8yKmsT&yrf<1O#pClo!a)P+,N~/`q.a}W6]K(:@{[!VEUMdoq');
define('SECURE_AUTH_SALT', 'x9)!f/)*}ffO#&gR! -+[L8UpdFpT&=-LK);HEE1 7tg(ho$>MS@78:V(7W7KaI]');
define('LOGGED_IN_SALT',   'uz.2EQ3-6h~QRjX#rtZVp:UMllP.`%GJnR`+n<>yyJu|[HbE5wZE}vh3QZ(6WcOP');
define('NONCE_SALT',       '$;xKHx]m&NzEZO|$hCRP#fV1i>&:A+&(-V4lhy8p0!NP/._+L:xIJ-95!KXSdV7N');
define('FS_METHOD', 'direct');
/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
