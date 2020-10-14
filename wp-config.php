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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         '0`laohYw {0ZcLZJ^o89=AI]<Cv8Ws?,K=;YEMuXa]43/yf?f6h|8sS,>Zr?C302' );
define( 'SECURE_AUTH_KEY',  'v~vy8p:WOl7VT}y?Q;F5};dq:jr_djr?aq.OeDOCdr?18-:a9<aLRC%.bdNzZkS_' );
define( 'LOGGED_IN_KEY',    '%ASh<s@7i3XTIZ3Hu(J,>8/CCa0b6@O?{;0dHb9Ln$Olu9br(UJ zKWFTXAhdxpm' );
define( 'NONCE_KEY',        '2MbWcLStV7SR`}Z5FH`X}_)-WA@* N9wOS@4;qgN6]?9:S~%?issO8!oc_dNf?za' );
define( 'AUTH_SALT',        ' LJR,=#ss3iCPbI$#SO=BCfqn$;N_ZXj*[tT[HXQyGaPib/E P?Pu,ztX-m9tU=]' );
define( 'SECURE_AUTH_SALT', '$=Sx}-^[Qt7`>RKw[Bq.P*oW.D616t/5Lff~H(O~TQP4?Fz]wR~c=:wxj*+KTJ/8' );
define( 'LOGGED_IN_SALT',   '|EI,;?1y1flH1E>4u5k!Ef8eJgFd[_w?3L. )=`[n4HB2;K`h!0,9riWAI+f5Xgb' );
define( 'NONCE_SALT',       'TKb((A{U0-wq,|.bE,+q)m*[H?>Fn-N,n?ZRGIy`XdEUtdk_?{w6z^^5|#5`OA,-' );

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
