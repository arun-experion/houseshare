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
define( 'DB_NAME', 'chlhouseshareproduction' );

/** Database username */
define( 'DB_USER', 'psr' );

/** Database password */
define( 'DB_PASSWORD', 'psr@123' );

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
define( 'AUTH_KEY',         '`l)8ud?iv=4x-Qv&:zI*R=Z:=>|Oy1{YGD~A%Z`?$oe+< Ctv|yR~SToK~0{>&@|' );
define( 'SECURE_AUTH_KEY',  '!6_qYPsrYqV9H,R8W/!n/-H0FN; #,M4Qk^%v0;z8dr$FI.LaYR>]=p@m(p6GAqO' );
define( 'LOGGED_IN_KEY',    'r!#x3.w#SB/n){R`$a;OQx,3|+>-lj,f`m)fh;wdo(OBL,U&O/(t65y%~{)7D}#r' );
define( 'NONCE_KEY',        '9/QmsVVwxoJRvNDA~_lzinA0DD,s5w6I4sQo$OkQIW3}wfplzj#9;fYy7uf_3}.m' );
define( 'AUTH_SALT',        'mS=zXLz$5G3|DD^3CdyW*Y4di| UY-2B>97Ql`fM/-`*MO#YW0{$=o(S]7.g8Mv1' );
define( 'SECURE_AUTH_SALT', 'Q(u4G?MO6k|Q4;}|-^5hx$`JSQS;bwt7yy$2{[yl+&%)6_#do%#kU:Psb*WAqhwg' );
define( 'LOGGED_IN_SALT',   'g{xB|:{v>=f>|dq|_8C#MG@yP0zA!&ZdFO~2-/ov(YS34,5#@k5Pn$$$-$QEFCjU' );
define( 'NONCE_SALT',       '$9!69y@r&@|Hrqi5X,M-[us$/*8=K-I]7ZD](K%(0>@02l=qjj2kE8KdV. d)4Uf' );

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
