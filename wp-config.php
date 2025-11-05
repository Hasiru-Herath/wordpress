<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tactik' );

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
define( 'AUTH_KEY',         'q`(i@4p1[:](pOb$w-[.Q>S>=iAJHUGe9lPHbq=3tgzPd*3ZxsZ~JRMwZAcCr4?=' );
define( 'SECURE_AUTH_KEY',  'd2t;8+H:G}u%d4Dau8s?utB?NHGtq6pTjdmlbU>492_/3nz4=Hv/I8/R+?=}B-b:' );
define( 'LOGGED_IN_KEY',    '*Em5c$^R,pEeCsbz:3@-bz4G F&&Z-.p7KQdHf 9vY-K!<5ol{)+aCy|tsDL]mec' );
define( 'NONCE_KEY',        'g0bq%y%BYzPi)M@f2^x/O^xKhVIrV=jwunq4*CuB.|Y)p;N^V[$JW68D#%G/ls/1' );
define( 'AUTH_SALT',        'NMLD#{ZRqv;KE,EnVv-g5<yeiNP_?0mZq1fm{]@O~~;h>K=$LTp/4r1IcaaqyV)B' );
define( 'SECURE_AUTH_SALT', '<[^#)G-&fc(5,?gPoY?! kpX*hg%$p@Laj[]#GDN`K:}jUKBfWk{jDgPj8ec}eT{' );
define( 'LOGGED_IN_SALT',   '}WP~6)o?!2A_|m**k5i`FjBGYRSY@X.tz;cyoC4}P*{?xk0t$Xc~GUa8s*,fCx}1' );
define( 'NONCE_SALT',       'c(!kpSbQ:@+S{sP4M]3.OyYMVQ.>};,Zs*BTEmoP{H$G/%^&r&g-OW(SpEV{ZQv:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
