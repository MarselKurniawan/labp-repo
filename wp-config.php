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
define( 'DB_NAME', 'db_bumper' );

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
define( 'AUTH_KEY',         'W *^B$Ut?cSJ~#h:Lfji]]BlgW7w3;Y+y!6@K*xk/|q;y{6<<fE[nv<sr{58 c8=' );
define( 'SECURE_AUTH_KEY',  '/PZxD@ya_Ek_R>QOjr`9/WT,ZE[Lmdg2pI1y7j0:LumfC=ETbHda,3}$MZ@BqfU#' );
define( 'LOGGED_IN_KEY',    'Uwv:0x_8nw3G3Rm:kr;hpr:6H {A~WF[bG(vy,+$CQgFspi)|OJUO|gnBpOXuAe?' );
define( 'NONCE_KEY',        'X4#o%{s6Zgqi*L]+#?+O`x/#r42%Mmf(-k741jRS4=wu:aNBeKare];`]xm>+07.' );
define( 'AUTH_SALT',        'MZ]Bqk !8=&).5ASSXKWQt(54gAwVVqbXzWcJkm4jGD@LaG;4A(MTz/B7o2}6+8>' );
define( 'SECURE_AUTH_SALT', 'he&(T50|W{yy@-gbgg|{R3-S{I8<qg8D|s`z8|5/aLAVgrXBRaC_6:$Y-`6:do~y' );
define( 'LOGGED_IN_SALT',   'WvT/Q,`g(|[#u]#zPS{,jW+t,c]0RO7N :lmwM$X5Gr872Ni=0p.M1>-+LY4onxV' );
define( 'NONCE_SALT',       'FgsLpe(UnP,*^x:4WY!j*%S<jvjlM%8sP)~R]q.?RCRL5]n.ef]7S3QGnO(8h8+j' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_bumper';

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
