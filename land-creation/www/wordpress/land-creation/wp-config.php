<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'land-creation');

/** MySQL database username */
define('DB_USER', 'fdk');

/** MySQL database password */
define('DB_PASSWORD', 't05nth5ng_-');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}&?p|ucL68C`k.H+L-12w$rI|$6K+3l|Ue1lc;-q^10qYh/}C$<m~*!El`x(cMf(');
define('SECURE_AUTH_KEY',  'DhU@K&F1OK3Apv5Q&>I`$_nMa}QvF pT?eF.U0)y#ylm!FOC6P)VJM!?OW@V-|&P');
define('LOGGED_IN_KEY',    'AK-Yi~EO`cBV_!;9[W+S<*--iQ{=;}}pzO^u5;R|(L6bdnJ_|,,Hk&!4>~J-!oB!');
define('NONCE_KEY',        '>>Y.Ab`j]tIhsswq&Z8!Y#f0^}Ac7G^WMGQW[aweq%}:_bM;8I8L=tWx2aq6zV#1');
define('AUTH_SALT',        '<!>n-pfkpFY1q+;9%[!u/g#[|Z}{6,T7i#q!-Qdy2k(kAQ&[{M|s;>@&th;sg/R<');
define('SECURE_AUTH_SALT', '%^2,& <)ouU!T577&iseq28Ks+`TjH/oWRjOR,f|_%-?YX( a|#;xf+jl:VFn^t@');
define('LOGGED_IN_SALT',   '}yYXy2eHf;V?0JcA--2Ru<7W+5mNZrf[sh7*@}Hs2 S>[-M{~Fz/^wn!+{wOO8#,');
define('NONCE_SALT',       'o:`J%5F]X0XW&.YyUVw_)P<s_gS>]rR/+--<1-[gb)V(N)+tN_3jU&ckO6nm-.75');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
