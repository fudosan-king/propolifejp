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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_nakanotetsugakudo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C_iwN@C#%D8`Y!mzT65P,K1bxHhW92-> %XO/sYXOr`80:BnrzfGTL**CN60Y`du' );
define( 'SECURE_AUTH_KEY',  'gre?<$3SW/J=EZOF*-p7F$3PMkj _&sN`*k}s558~>|M2[2|Jvrk!zPgy/C!0%RD' );
define( 'LOGGED_IN_KEY',    'N3qmviSvgOrG|aE!%KM0[>r1BS`<$`V37+<e_`^O}u XvH$1*?<9n/?I.;mxQfpv' );
define( 'NONCE_KEY',        '@7YaB+K#ds?LB3d.eqI=D2w>rq5:5^&_u,&V94@kWr$889lDyGg`c%:B9ZTc*QsY' );
define( 'AUTH_SALT',        '{|mEUEkz@7hzv7Ey$|ovQZ9:t6&YJcIi8km : UG3NT0JX|({PF80EH;s^g0;C2<' );
define( 'SECURE_AUTH_SALT', '%oS^gZ1u#<#<W K~7ku;.-#].wS~0=[B62LOTj$I.BF7jGdmUqk/wUX4 j@LLBo3' );
define( 'LOGGED_IN_SALT',   'gxM7Ekuf#87Ajv_Bfoz_Dm8@lDT:i{IaaN3;Pt!^rXdVO2VvR<]MdzoFvO+D=xRb' );
define( 'NONCE_SALT',       'vcLpn>sNUm+yW[o]M37/JZ q^f>C6GKH/LI,jgQw69{PFRwp&l/FKYfD#I(}~jR6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
