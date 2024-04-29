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
define( 'AUTH_KEY',          '4UJ*]99(t=f66)||F[&=C=M-f^^U:CihJJwN-B*H!>B&GXRNH+8%X(8*|(m[.Pqo' );
define( 'SECURE_AUTH_KEY',   'no~md6_qz3lBaNb544GC0T6MQ|Bxpkq14DCvdc%Z%gD}SmC!%kaF.4T:=(@:X$[N' );
define( 'LOGGED_IN_KEY',     'zy$L(Dg_sQPvZiIFrQ;rY(p5_UR.Rg`:%WiGK@^%F%N4)F9rw*yS*%|:tRf||nLz' );
define( 'NONCE_KEY',         ':?/^pO(Sc;z]R!z@F,1I?|X<G?j9 G6rr`I>sP-6nh17k#!vCP&)z[[Pe5NM<s;C' );
define( 'AUTH_SALT',         'b&6s,3_&<)CyQ<|/gi+=oOxnRc>P9s]SA2lX)8vvuetkwc JG*vC;FB}MX`k/|eh' );
define( 'SECURE_AUTH_SALT',  '}]x%SUd,E8Ya$vD+j5K*SBi15BkQY{JLi^f<eBN0R6|d)&.(&rI^mzgMx!~%SqCm' );
define( 'LOGGED_IN_SALT',    '_se.Z*{efzmWX0LNoQitujq|miu.SZ4%8E+=;|>V(E5)3]GydGCZEn!cW*t.:%?W' );
define( 'NONCE_SALT',        'q#SwuhM9gUY^5Z,!|DqA?XI2c52o<P~5:_fE-6GS0!)?tt-BSacz[9&noF8Picl5' );
define( 'WP_CACHE_KEY_SALT', 'xI0`R=#U6+HsnU`9::xRCR}?do?5-7[ru+g`,_}aHg/uiG(U4(t6,u)0kfk>)mL<' );


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
