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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ParamountStudentWebsite' );

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
define( 'AUTH_KEY',         '<{!?%YfQ!}bXH(>MYfEi|^+mN6uvzl-Pi0#_B|(T!/9If2Jv+45(yvH$4WZ}3u>#' );
define( 'SECURE_AUTH_KEY',  'hr@LP>E^y?gmW, )5w7=WJiN`DbW1l]qo7]F!f}F$Q$Fm~WlB4lgAUgY:Rf&[MT(' );
define( 'LOGGED_IN_KEY',    'u+dgO/`W;wdsw8BHiWRDjU|6E@5QqS}6nR>&B&OMjE?`)^{qmJsJ|[4*RqCs-HH#' );
define( 'NONCE_KEY',        'vQo=CfpE7SZK<76,YDYcalrZ$N@0I(KloYRoFbzm.rf9%`P&{kZkk0-bFQ( (ln.' );
define( 'AUTH_SALT',        'VxU$ojpz))_8qhkD{g2TK[FV/I:oASC8!WcBauP?x;3/rV3io.NiM_jshnzx^6UC' );
define( 'SECURE_AUTH_SALT', '+pd7FI^WUFZP?yToQg/Mrij$mOy4V: ho=%I4B)mTU9N>t282y!)N=6Z:N_WjUHF' );
define( 'LOGGED_IN_SALT',   'L<DyS9Oi |[9pb|IsppD0`sG77JgP utMhPQvNoI4Sj9Av]>.c8p7;3]<CWntMos' );
define( 'NONCE_SALT',       'e!,*|xl,(ZEh921wfFEd/1}_sD<$5Kv&W@iJbp12WsM7 hi;<;:9vWr[.JRpC*`?' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
