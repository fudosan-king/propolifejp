<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
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
define('DB_NAME', 'gakugeidaigaku');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'z:^g*KreB%~qHdPy,TNh[[h4g)31UKqZJ1{M6;<.@cFF:L/2{Gnj/hbFr2?4o:up');
define('SECURE_AUTH_KEY',  'V;AKwpm AbORRWQ[#i$4z9=X?.SijvWs2~,[D?OX-f(i[_Tph[*VWadGz$;uY:dI');
define('LOGGED_IN_KEY',    'K]#$S%*S9]D9^qAGjjW,tc/<>7+GF1v}h3xIwBj50sBk(.5?AOJ-a/Un{S GHH,(');
define('NONCE_KEY',        'ih:gFI|IG!*z)C@4:Vk?:Pj>_53}>u=%K^)Mx7[C*S`U((pl-i/=|;xy*iMMBsT_');
define('AUTH_SALT',        'o?fhj6tB0xN |3lAsckT?e/QjA2mTCMq6c[&nL9/_Y `&T=qMe$2fxeK~6mZ8>,E');
define('SECURE_AUTH_SALT', '`sK]E!&a[]>Ddx#7_q`GmNPvi1:8o@}C0J3I4]K<Mr@~`Cb}ctr O:`=LsP-#r)o');
define('LOGGED_IN_SALT',   'T*oii3h{RLV%6/%7R-3&N}D*TeZZVq{Tq#_I49|4|`M9!vh6xjj*r;J=EIG8x0DJ');
define('NONCE_SALT',       '}L5JJw{^|L39N@A7Qj+{{$f2~W#0`Zn/j%Hr8e@ xQYg}EcYlwOXZ73sckJEe!NJ');

$host = (isset($_SERVER['HTTP_X_ORIGINAL_HOST']) && !empty($_SERVER['HTTP_X_ORIGINAL_HOST'])) ? $_SERVER['HTTP_X_ORIGINAL_HOST'] : $_SERVER['HTTP_HOST'];
$local_url = $_SERVER['REQUEST_SCHEME'].'://'.$host;
define('WP_HOME', $local_url);
define('WP_SITEURL', $local_url);

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wpgakugeidai_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
