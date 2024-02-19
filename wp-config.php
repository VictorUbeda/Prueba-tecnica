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
define( 'DB_NAME', 'wordpress-db' );

/** Database username */
define( 'DB_USER', 'wordpress-user' );

/** Database password */
define( 'DB_PASSWORD', '***' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '4&oO~p-k5G6Kp#nSP%2M<_(rsOr[NwjE/Yl[c!ee[[+:QT,6z*0h4yn!=];5];(o' );
define( 'SECURE_AUTH_KEY',  'i|zCt;5`M+3W5It ~5I8q+r`U66/+l!ob(qNIpI|D92T:LiQ@U$9O8#cTFuxQ9u4' );
define( 'LOGGED_IN_KEY',    'kCK`Ry8$L&q7|zqWk-f:ZGD_U|~?qlZ/F.5=e;rr.+eS9T!VMwL-IS0le4p0N`|?' );
define( 'NONCE_KEY',        'DK|a2]Z2p~lHyr;|XP`5cD^OLXR~%Ao_&+(7l@q4|+%CdBe^;47!SP+];Y<>Ow>+' );
define( 'AUTH_SALT',        '3LIYsM%Sqa:N -`FW_ZL?6bITo!elw w(+4bx1_alCk3Ut=y-PY]GTQr2tb{<Lkd' );
define( 'SECURE_AUTH_SALT', 'V<i?aAt)17o|LCd62hXD9tUnUOmD-t+-r*KOU}0{;Rf]jl!.gqpUgSqoYH9Kt8;+' );
define( 'LOGGED_IN_SALT',   '>!~EJyQh%1uDT_:$&,UsSo#+,oM_DdD+(}@gjmQnsm6).D]fxVF`PihI3GY,Fg%c' );
define( 'NONCE_SALT',       '3K?crFxkabEcAX=2SQ$xy%}+en>|CHVy9ETj _)=9?):MZvJmVu-5pDv-Q#k6F56' );

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
