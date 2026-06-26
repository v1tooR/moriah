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
define( 'DB_NAME', 'u175428929_YG42e' );

/** Database username */
define( 'DB_USER', 'u175428929_39E2r' );

/** Database password */
define( 'DB_PASSWORD', '.wfoj#QW5<' );

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
define( 'AUTH_KEY',          'WTvsA3g-m_ma42Bl3akrXqvBI,Fq;Kw.e2DF-8$)fKu&6OXb+^OfSG4&0keu]X_H' );
define( 'SECURE_AUTH_KEY',   '&r]MZvro^=JbYaqB@B~l~O?1kmEKr8c.K,F=mv,Zz5*e 5lQ0lbJ2]z+qgCfR<#B' );
define( 'LOGGED_IN_KEY',     'pfaqwz7jW}AbPVP~x@/PA} %1BL^kjo;bEJH)]=Z~?&rGa@) l?5Qhq< L0$ZNIf' );
define( 'NONCE_KEY',         '{O>znaUaHQ)q}],Gb_-?p?4{]~+x7h]#0s;S/ JDxLEQ:~ ^yM#4z|jYD2vZOyqp' );
define( 'AUTH_SALT',         '?,l1}=aQs0VMR8xkYW)%2riwG]Z/xBCF.UzP&DB~b^>61fB5=Gf(_Ut_c$$S R0?' );
define( 'SECURE_AUTH_SALT',  'YffxBfUFBdvoR*23kNO<-u?XXcB9bU)x|s}3BsHUB+v-L0A;1+7RlFDay`tlirqN' );
define( 'LOGGED_IN_SALT',    'xOGuT:4je1=mjp4;i[g=X@XS0SNWFa+N@Gg&1[uPJ^biU[t8nqHrkF&-%n@#BkH^' );
define( 'NONCE_SALT',        'p{ll9yv$GWj|AlMMeBdlFO-&vP;Px-D3)4!Lkn](BauLQ:!91>cymZrTrUvairG)' );
define( 'WP_CACHE_KEY_SALT', 'BOQss&]ZZE2<E(tM<PqC:S7>j{&.%yH[k l5NIYR+U:>H/&f+>@|DI2]ue2#&37}' );


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
define( 'COOKIEHASH', '026eac91ffdbce7558809a6edfe4ceae' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
