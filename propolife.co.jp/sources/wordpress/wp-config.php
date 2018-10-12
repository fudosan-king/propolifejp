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
define('DB_NAME', 'corporate');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'propolife');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'WafR8fk4');

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
define('AUTH_KEY',         'CQ3Rx8=&mc|s!k+;@Rf_+B[r-si_fFAp.qn_u:f4dT$R~QsUmUbmho?ESO3v=:7R');
define('SECURE_AUTH_KEY',  'Sl|cJe3]8+u&hGyvIw=?)K$XQeHmzQ[.::GQ9@~bPQZa_/O-L3{@:H&u11{YZels');
define('LOGGED_IN_KEY',    'yOK~$E-$c.~|{Fk}ikcE7y$y/eQ<%_BNnDP;<0.NU!:r/43o5jti]j2x 1n7vhv;');
define('NONCE_KEY',        'w_K-@qck362JKawK6+j]_(/i1BNs<y5ueLN}FbH(-URHc; S#TgQM@jz1U HO>xJ');
define('AUTH_SALT',        '/jQ~XF]neI;~VN{@c;HW]I4|qkIHy;zfe[(3RFPZEY)`rNH!V5%*`&QK]|2FT+5U');
define('SECURE_AUTH_SALT', 'Bh1m24cl_-Ak!%?lv;WIy`rDjWiBm{uN&Z&bK|B|fW9(Ni n|{;/0Oq+D)&SU!Tr');
define('LOGGED_IN_SALT',   '-G|;.$sI;#BF(Ycs5<6tS`^iR[T[-~c9$q;JAoYpqQSx |faQHVE9]3`)W:|R[he');
define('NONCE_SALT',       '>Q-:{K39Gt%&/o@0iHv0n)+v(zse |1Z}&Z$>jTi_j(B=+{iU0Y/j|rJ-k!v&i0$');

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
