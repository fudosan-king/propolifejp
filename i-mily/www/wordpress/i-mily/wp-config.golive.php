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
define('DB_NAME', 'i-mily');

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

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
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
