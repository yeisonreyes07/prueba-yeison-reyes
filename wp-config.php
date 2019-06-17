<?php
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */


define( 'DB_NAME', 'landingpage' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'aFlI/0({gV  [0B%5>->]q/MohZAUYHk11X/qpN8[nkGiQ-K|2z/s21?qXgE{&QB' );
define( 'SECURE_AUTH_KEY',  'y<>/1Q<@6Nk9O$-^+(#di$FrutI,e,$Vn|_M$|q&H.,be|%EE5;<=fURw%D/%S%6' );
define( 'LOGGED_IN_KEY',    '0W?t,Q PA./y@D`B%2m6V7T6i+Yt-wAZ~fg(!W|AO{7`hJDqno&<kE&GI5O.{/U:' );
define( 'NONCE_KEY',        'bti][9,%P91gntLy>eXr_(ht=M^0ed7UUQt$Y0My#4;k j/C)FQ`Ew->_m@GV9,&' );
define( 'AUTH_SALT',        'u#:Q5t,rB<}JjM{p]NF2f{[EFN|UVhi.mJ}dzhR`H(FG3/T06o)q)xo]yk3R}|2?' );
define( 'SECURE_AUTH_SALT', '}sEsM&V0zG!B[J6QIG^_%Zh;9;[d+px-2cU]RQn5xThhc]veXK(r7* S8 S[K}L5' );
define( 'LOGGED_IN_SALT',   '6:+%a},=%.XJ8YeYbWY|sRHxq0F8$PFZU<L(;cfYl:0n-SRK7_(oer r{4no|#31' );
define( 'NONCE_SALT',       '8MruT%T67NXt5rx6nl%/NW/D>+CW[[}E|D*L}z9*,q?yzl%D24FkN:b9n;Z7pD-O' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
