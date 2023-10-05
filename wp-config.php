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
define( 'DB_NAME', 'freshdev' );

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
define( 'AUTH_KEY',         'E[4:)R;^Tdn%%pARRru%(Sxw7bd6J<CJ6XftLQDXi]a,%}Y{3Y&poLr,Y6F@w#kx' );
define( 'SECURE_AUTH_KEY',  'tJCUOF8&5!peYM:4|J}rH9zuy[xrscO2+agz%P:v(0[F;5balVAj[~k_{3]Ffv}:' );
define( 'LOGGED_IN_KEY',    '.2s`r4-VlKunL+VXp uR;/|1_4Ck<$RW0OOKn(a#*y6|S+>s:+pisx@IBb+5;Nmj' );
define( 'NONCE_KEY',        '>%[_n#|j8@]@;w&_1.6kE/&d[H/)TG`i)(BxrEN b9F;!<,kwQJt]~LieQzBAB,3' );
define( 'AUTH_SALT',        '4 Z_ie&N3aQYb}xTjgEpP$>z,H^0}O^~Z_nxyX&K(M[^GncvW7FTo|dnX[Hva@4v' );
define( 'SECURE_AUTH_SALT', 'BF&kkp(GO{HsONll[ec<4WvW=%%Azw[PEsY250-(#/aM5VNb05Kk,}_EAJ_+~lX6' );
define( 'LOGGED_IN_SALT',   'gn7K4Lt6b9w*9OVwjc;m]cA^WeH^deM-$%)jlbysK8)o(NVAZ.5t)!k+e1Oano6s' );
define( 'NONCE_SALT',       'c?Z>gv!Z|A4`WNCjUyAhZvBKo#&k7CFK[583r)rPuz;O))=*zu$.U~1lNwhzF5!!' );

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
