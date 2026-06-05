<?php
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
define( 'DB_NAME', 'u175428929_XSdOU' );

/** Database username */
define( 'DB_USER', 'u175428929_zo8ab' );

/** Database password */
define( 'DB_PASSWORD', '}/!78*Z-dp' );

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
define( 'AUTH_KEY',          'Pv9_=^$}VWlZ@3#(;WL3`[_zK.R+Y#=6-V{twq=6~Dh CO!%xi4Uo4 Y>;D0^mJ4' );
define( 'SECURE_AUTH_KEY',   'w*m GAnXIB/P28Q i=P4!l06cSjB]D2|v4mh^#<`DG$gj`KFpc(P{Jgarj d=iT^' );
define( 'LOGGED_IN_KEY',     ':vZsXU6{@dVkJPw6)-to]oLzkEUEbw!<jd{MJv.uoavuRqxS7hU8F5qq16up,n_d' );
define( 'NONCE_KEY',         'ar2:i;1~EqXFqkW__]F]+/ZiMc]DcIrc1RgS;2=p(983L>VRKfN$#/3*!/+B]NPK' );
define( 'AUTH_SALT',         'fAIdl0T10Df#!tFIv>&2Ip9*IPltPlcVK=[-/7kR; 7uooQmbzBYt.{as;T8b|Ko' );
define( 'SECURE_AUTH_SALT',  '3wHKIj_eNh)w2Z5}n0/<$*Wi9pZ.9{Hx}!pkmSdqOy9bWxZ%hAuG$z8pIIw`0$4=' );
define( 'LOGGED_IN_SALT',    'y%sqk+ K!DIj{TcR)<5I0Ml_9MKxWi8ojj:upvCK[Gz5.WfC)E-E>C=/>NA~pQr~' );
define( 'NONCE_SALT',        '6:|7c9?<];g7xGLcrwH(cN${5>bBA=_qWcRs^Y;|;Kcgw;g|Ezg3X*uPL#j l%oE' );
define( 'WP_CACHE_KEY_SALT', '262K8KTrNo!d`}#C-CD*f&^61VwibIJNWK%08Pws^&oF8QjA/HBf?2x<5@Ps>JLs' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '61d87eb1fac6f329c3a11a83dac52dc0' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
