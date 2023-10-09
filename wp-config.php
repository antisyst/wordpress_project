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
define( 'DB_NAME', 'newdb' );

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
define( 'AUTH_KEY',         'tU{_mCjY9*zZkp?XN7,9f<p7IFdmf[Gb14*NI 1{6@;nRD*/1TBJ@zj)]e7-AlCw' );
define( 'SECURE_AUTH_KEY',  'pQL1q>tJjAs?h~RKD0RnQHpY7vM&*Xi}U(~&3q(ikKW*?R=7BmWTK.k/Zgn6~}K;' );
define( 'LOGGED_IN_KEY',    ';-Q}eu>_7?1!gw.wn#~S#cy~ 2d8@}|(nd(-06^wc2OZ,,R#@XH$1 WKaMrj8Uz^' );
define( 'NONCE_KEY',        'u=,V=%19#>Uy`Q:Q=G{XLvMZxlUi6B*X)#U yX@;9RicmA4VS>8c|_dpRW@${+9Q' );
define( 'AUTH_SALT',        '`96aSqRIov>su ;pj3fcxFt)lE(v0CEp))xnV;hJlY4Y]Y6td-`#vnLM&9v>8jbV' );
define( 'SECURE_AUTH_SALT', '>t{-GO29YDKIyF<X6T+{%RcDGyuWo>{KLy%kJa1{>%4uqvXy&LE2T$X.N7e#pz:~' );
define( 'LOGGED_IN_SALT',   'XK0d?Q!nt6R&bl!}jDQkLp$Stexh746X9{;9*f.9n<2O-[4?COQ:|tut/Y79oeIV' );
define( 'NONCE_SALT',       'f$,Omjfuabl6a8,Ms9&a8^(F.<FG&@?Q>zt2;y;_(8-&[_t{Wxf_j[rB{[`(3E=~' );

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
