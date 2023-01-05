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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'customPluginDevelopment' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'LBe(1:U[|FZ eLq{?#uY*TLB?_~W7x{dl_@k|HWr]=ydXck3=ha1qBz7~P@hXY?1' );
define( 'SECURE_AUTH_KEY',  '.-f !BnvyfW=lM?dPwy{yKXu[)Ka{k _T,]gH#z,;r&nWge#ygs.CuGj9Dm<k<4B' );
define( 'LOGGED_IN_KEY',    '7s<9a_zf46-1akZUfH3- EoCr&Khh|Q~fBdtRVliQ8n<eP?,oI7sM=U]XHcWyE(k' );
define( 'NONCE_KEY',        'nHS`>v}BXtUP*;>HjIi%f(^6)d`V8^x<}{O!i=Ne`{4>[Bbq.XZ/:zFOcDAHPBtG' );
define( 'AUTH_SALT',        'sR3wV5-UPGjD[k{!|?!K|{~SuYNji%>:%|.ElrrhoQ4sn7]}WfiN<u/mPh.~Q7;^' );
define( 'SECURE_AUTH_SALT', ')Hi?k=P=f0=I rB#-Mo%z^[.XG$o<ky9n|LdMbVH/.Gc/x#7oC|H>V*L*BnqUX2}' );
define( 'LOGGED_IN_SALT',   '0c4w3~d}b!BR7_cZZ*)2TG5Czro{0wuK-p79cc0tfEv9yKD%Puc8q6An<f6@(Unh' );
define( 'NONCE_SALT',       'HCbw8w=a`R_O9j1_)L$KRB4M4*[y4*hxZ_go#+h>AVPlOX!oRAS#)8*mxYrI8O[4' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
