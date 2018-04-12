<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'prostyle_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'dasp13*dran');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '2=X!,ON_4$oGV_w(Ly=>]H@5;`It*erz?T< R7FG.N35o*l*MwF(+_i|~(5)|`}Z');
define('SECURE_AUTH_KEY',  'F^l):?XUkAYd`b>4]iG#1XSw}0$$Up0rqpO}Uuiw1`X~KeqAR0`w+TcrQzoxNmod');
define('LOGGED_IN_KEY',    'mCrou#t;C)=bAUk[ac{XWe`X~;@timr4 .M{:<E~^:jm}1p`<P7A=Qk`%A5ZvK]2');
define('NONCE_KEY',        'jO_h#~W-womIha#)B+FUA^E9kG/mhJl@xcgDX%~>OgbTSR6?y&66^yu0`R*T`Ei:');
define('AUTH_SALT',        '(V^Fbq8_1t,#]1AiLl@C -7yB{T2&hAiB;>{Xx BxZetYq])OhY`6xY!R_hnZatF');
define('SECURE_AUTH_SALT', '_IcG|lF3kFU[Y;N? KR*grgtpkCD^QR4[axPu NG54yrknr_&(10k3KXlf^)8lzp');
define('LOGGED_IN_SALT',   ')!Z(=t5E+r#es_7_-d|%5l>D#{W,R6d>Ws;rC14EBp@_dD.!M.F_.Djri.;KclK@');
define('NONCE_SALT',       'hbif!Troa3UO?==XiHGc;kw.,:u;]j<Z1GPWT(6OgPYSzTz%LXo8(f<MjUN8i-^ ');
define('FS_METHOD',        'direct');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
