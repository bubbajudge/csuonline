<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'csu_PRODUCTION' );

/** MySQL database username */
define( 'DB_USER', 'insight_csu_db' );

/** MySQL database password */
define( 'DB_PASSWORD', '-pooan@zo7Ctm7' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n@+QTWjjh]G.Mj|yvHrp_e+P^!#i35|!.W[4Mi7cB`_r==]G8XqtTt]q11Ma{W x');
define('SECURE_AUTH_KEY',  '$a<`=;qs4UJD0O]7S]wGkw<J.@U7K=R0i]&Y?1I1!4=I`7D9j-*|aGO{XmcBr`AY');
define('LOGGED_IN_KEY',    '~=@tx<:;3Jn-|+MgI]j3anGzc@W XrCs~_GM.h;`u?!QW#<apO/piA|7T$x.*m-d');
define('NONCE_KEY',        '#;1U08L(|_#3:GB-l-WR=g|H9Gb[7uAax}x[O{j0[GEmR{iFgPj:>pfuy(:|LP1z');
define('AUTH_SALT',        'eB~j/6F>01~-/jS<*b9nk{)-q>:OyW|J&ZUQkA%. @ $exbCc+orM(~uE_JiU^>#');
define('SECURE_AUTH_SALT', 'R+f>{b&>,|I-e%jMef~N2LJQbaw]|nN~[.@{93~l v_j/$.Wq(cf),kV$Bfn4g#1');
define('LOGGED_IN_SALT',   'PQAf.dA3rBfvt|KRMD(K$W>t{YTgqp5djvQcx=Zy]?dl?Ohz0]}.3N$)33+Odl[&');
define('NONCE_SALT',       'Z?A7fV%X++blS]>u0pmW0va{7WMY5jL6+2ay%BuJ]#I;?Y8ICdGK0^h0^L~Ytt=I');


define('WP_HOME','https://csu.insightful.design/');
define('WP_SITEURL','https://csu.insightful.design/');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bmrq18_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
