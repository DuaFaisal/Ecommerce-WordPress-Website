<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u203672507_RjSOf' );

/** Database username */
define( 'DB_USER', 'u203672507_kGIUO' );

/** Database password */
define( 'DB_PASSWORD', 'QLO0N0uVpr' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '82%F7j^856CQn$pRxniZf6ji]|,>Zi^tAy:[*V@hrDabHw:`eSeq-pKlYCtvvy,O' );
define( 'SECURE_AUTH_KEY',   'CLPO%C{16u%AoxYl=d=HRWpuLxd!ZK).p/<3}k))+~s(jY-vs/]3Adp]aui5#PIO' );
define( 'LOGGED_IN_KEY',     '.mOr$xU/V%1*XPP|rKy=tAz@lOo[&@nX?YjjW3yGcM;q_33X4iO#1R< [50):.8e' );
define( 'NONCE_KEY',         '&/_w[`JCuU$1{ljNH}GN+fn52Bl<7md>HpTfCwca4f&|XUHmT+*4]Puh*R+gfw5h' );
define( 'AUTH_SALT',         'Qi/zQ!PnPySjrA{)n9n=,iy-mP(A>WEXa;*7xk,O81!w>Qf`%tBxyBjBskRYI(])' );
define( 'SECURE_AUTH_SALT',  'Q:),dKO7G_j[x=pQ-njcbukv%qA@8$tld&$YM`d+!~@HtmFg(q3J>wsG3!RpU^*y' );
define( 'LOGGED_IN_SALT',    '#rnrUGrcZTZJLr@ap^ruW3[F6#U>*k-#iN0qW:>6R.lLabSI?ALn=g>OTw/HqI0&' );
define( 'NONCE_SALT',        '+I]:xX_$QOjkR-AS6]GoN!eP5/Epd)3_rsh.8f[ICtdtrIaCg{!n%&N)t%.aU;^3' );
define( 'WP_CACHE_KEY_SALT', '%IRP?]#J@q*Av $.E:*M5iPwW1WFhiX?,;>WC:ipJ*<>c%2cE5O:fMmw{I7`u0Q}' );


/**#@-*/

/**
 * WordPress database table prefix.
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


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
