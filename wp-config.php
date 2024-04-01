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
define( 'DB_NAME', 'houseshare' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'global@123' );

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
define( 'AUTH_KEY',         'RWu]:6&Zc0%x,wyP.:GW*lYP?7Sm71O)X{(PHs@emD%q2Wpk|VrG}Urfk&H8SN&,' );
define( 'SECURE_AUTH_KEY',  '%=Qw3O.&TB~#nE>69/`!a<E%cwc^lDXU@{jSy,mr+{4|<4;vBz.MP3u&DQrFGWyv' );
define( 'LOGGED_IN_KEY',    'L:@^y~zxDl]r0a }6+~,52?5.m<L}b%tM/p:zPPU@0o5Zlrxcq4Xc]LvZ7NO9,Ah' );
define( 'NONCE_KEY',        '=GI@.LcJ|[EN|9E%)szfs6}nspmV%FG7z:p]g6U<iW-H2yv:gH!F5p!>4yFBA;%B' );
define( 'AUTH_SALT',        '[5ah*0.yh}B{t@uY} `J_>iWAzCzIfrg@m%CR_(x$=G~l}<13rdgUIfy,9@u]cs8' );
define( 'SECURE_AUTH_SALT', '[gE)PZ[*7Z8b_:Sq0<!7=)>l)Wmsc^GeV<au*sg/QQFDG$j+6WAG%t`x:6>9V6*_' );
define( 'LOGGED_IN_SALT',   'wr}Zw{ KJwk<XQCJ%bY<3dkp9HW#OF}nUcXY.k ZHcvZoR[::;BLeVFo(Z;kco:?' );
define( 'NONCE_SALT',       'IKeUjoJO#<F<6uX&ruPoZ7EJ^5 FJxW4Jn_7j#q-4,YNw>Yz8$Y-&Lh}:JmW}pB%' );

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
