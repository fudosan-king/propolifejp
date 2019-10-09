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
define('DB_NAME', 'wp_reform');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Nj<P/]+TM.+;7-`D>2n2Xk=FjLN.l<N<>9Gl+ZD4kn~.+*3wW3lVESGSKM@(fBN|');
define('SECURE_AUTH_KEY',  'w>Bhu.)A|Qop=-J./98o57K4Zhz}5?Jsi+SpoqcX782.}NZMe[,a,`hyjX>8t0Pk');
define('LOGGED_IN_KEY',    'jIKrW#+*Bz+%?wI%auhL1i3Z*Pc+KoBlJcSi|`t9T*G^K3!xF;wlj+1k4hY r$$h');
define('NONCE_KEY',        '(=w`FaxP>n=;V97?(gCygz=;`cX`>rN-}wC--0`.I+UYN3_B.Tb$tf9>#a*^lKwQ');
define('AUTH_SALT',        '.,$NF?e(lrLN;t -:Q)^6$EDK7ZiW5(#vM`G~oXe}^y?`+U4*OfGj PF}kOfNvm|');
define('SECURE_AUTH_SALT', 'G5KgAf{)Q<m|:H{Dbq]M4]D@&H^187c3-o_l/:=5{-(]EDLH?:eWT_k+ eeelMZ_');
define('LOGGED_IN_SALT',   '[BHhmg2-$I7$P1-1Fpc;dd;Hhd-F?Ixw#]*=zpec4t#v3 C3p]._0c~-yd-LfG)>');
define('NONCE_SALT',       'GiY]|(Aw%>>|na+Ol1G[8.|zIR%Aiq{>JH_vx3] eH7gTETZ{ )RnhYpI <xn?-:');

define('WP_HOME', 'http://chro-reform.test');
define('WP_SITEURL', 'http://chro-reform.test/wordpress');
define('FS_METHOD', 'direct');

//define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'].'/wordpress');
//define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);

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
