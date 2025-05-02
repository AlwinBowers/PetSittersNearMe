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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'Aq!se~hyFqZLC%`I{{[=OMQ[qX^_I>2&j&29BqcE92Szkg|jJFn[kxQ0qPiW#|y`' );
define( 'SECURE_AUTH_KEY',   'b]kD&mwT,rkg1(,C6RH9HS@@4lPU3E:L0EiXmnED`2s[|n%}aL*iV gfm4}0^m=@' );
define( 'LOGGED_IN_KEY',     ',l~N/a@WA,s[k@t/#`zop DfqD[Y>1}s|EKg?Ca#Z9@:Qn=ib{:]) !]e 2wwnT(' );
define( 'NONCE_KEY',         ')4#PkGLU8 A94?Ha[$:5osTl.UM$>D}]Unv=);v(%4<JN|-ST3*f,q_KqJ4*$fa*' );
define( 'AUTH_SALT',         '|sX[Fx7A[m!FSPl:2yeWKIOZ]n$+u}PL1:+6ALUJ=LW%jBPa6,](.[52G;/S;*|(' );
define( 'SECURE_AUTH_SALT',  '2VW-IoUBfE/y>Q<J=PTrE(P#KtfI,x*Ro2cl^CM(||*m$BFxKw+/d5)5J8+iuJz`' );
define( 'LOGGED_IN_SALT',    'G>UkJ7k3s&|S~M1V##GRL?brQQ-a]*Qp0uHmh6/~|z:%F&nE`~[w1omLn_&g8rAR' );
define( 'NONCE_SALT',        'RUX_p&CwPq[p6[nJp:_F!#3&&~q0,?-_13.N!`>ko5-VXd{ZS>=<Y;R;O 2b~.]-' );
define( 'WP_CACHE_KEY_SALT', ':Z_,4ihm]`mFUkE]<mu?R)4 {COQad(BO2 gKbqjkM4{5rEz{-/N!blOMCO-bZb6' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
