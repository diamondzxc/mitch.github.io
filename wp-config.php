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
define( 'DB_NAME', 'mitch' );

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
define( 'AUTH_KEY',         'q2So0WAFUd^/tmA4y&$I,o)vfUs:fbh1{c@/k<qRh9zdi09t]gBQ)S+?S@`qk#.S' );
define( 'SECURE_AUTH_KEY',  '@p/.2]`tEgDO1 0LJ,rchQXaw&)1bIhm{E!?179#QI ^6z(oXum-tSNhG/8KcGq&' );
define( 'LOGGED_IN_KEY',    '/joSZ{Z59=XYrR|_r>R<B,<|*_:WIBWZ|SYbg+$)L6%,Iyub `oriJBTXg]h.h(8' );
define( 'NONCE_KEY',        'YqPYUGUmj3nB14+o7IW3kdYDY=a8O=>m?0)W1=nH3BVTm8v$rs4&7)o~~;B~a{G!' );
define( 'AUTH_SALT',        '[_24j]M)mJ?nPJ5igt& Cnmd=-x@{_6[*VXQT|y}NlsX>>>^Q{/JW-|ES>X:R.-%' );
define( 'SECURE_AUTH_SALT', 'e{Cp_5%^Y~4&+aDKearz.J(6^ZtqMW[],Lh~yU1_p5u@:$*hDLbsdoHKL/,TsOhp' );
define( 'LOGGED_IN_SALT',   '|)`!h~X^YA#MU$&SbW0T;6kG@A2Buieh`XYCeoH6Ws83$m]ug%?%EK*Cxq_4|3@)' );
define( 'NONCE_SALT',       '>^8jn>8j] JM)Fq;`5@#L8 vQPZiYQ2-zY{+5ZXV|og=X!mZ?pI]+&B{Vgb|q36A' );

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
