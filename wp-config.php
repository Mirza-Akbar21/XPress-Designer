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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'custom_design_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '^<IVH=OsP@}OE^2%B{N)I{.m#Y;dX;cAl`=0^~EX1E&E-nBxH%@w<Y@y|PO2( +k' );
define( 'SECURE_AUTH_KEY',  '% ufL+DdIF:THWHB|`A] #TIRmF/M79HWjSzmHImFS3w2=ew0v(]jygB%r4PG;yu' );
define( 'LOGGED_IN_KEY',    'ierP|fhq,Z>BL nwJtG3yL9ks9j,T$t?@!x).=4F|QFD0Wvm,5p*d%.%2WNlXGUh' );
define( 'NONCE_KEY',        'HGQ:lCGXso3I|gTRrh9t;v[gc-Hn]W{W=m*Az/#ePA8sRO pN]0kz!3u4D_9`| -' );
define( 'AUTH_SALT',        '*0GkH`Pwa7B?b#?.X>xg??^)L{#l(`i|u9ujEPnmT`fc0k{L%u3J%)G=KX/d=@]A' );
define( 'SECURE_AUTH_SALT', 'eztUD+iq_G2Kd_BTuG]@z?*c:jHb_C3|v$!VnN5>/:#N*I7|FvJ-(P%B-GgtL#>&' );
define( 'LOGGED_IN_SALT',   'orIEK,B2OC,!GB);~QwKu:TRkd([+}m*WlBygu9-Y#A4Y=FEOU%I{Ru`#GniI7s-' );
define( 'NONCE_SALT',       'Bsg>d8D!b{,<D<o3Y-kVY$}9?=ICj&k(y~Q]o,emm@c<WY`}ge5:!*;Tpy/e_AA3' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
