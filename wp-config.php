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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'FVc< oXmNed!vVWQEcD:;zofV(FFSL)gZZgn!Tal,.nK@#pJNj?ysI?nk3tYS66v' );
define( 'SECURE_AUTH_KEY',  '*G1zWh%9LrQ72.Cw|Ju~@yIjGK/+joE Ai/]+(SymCjKL~<YpJmU_|0fE$_&=5QW' );
define( 'LOGGED_IN_KEY',    '#lqJTyAmek{u6hT%NtpVE@Z><dP+u^r<;%<Arytb$%MDCuNw1!h&xY)w@/]D1j2 ' );
define( 'NONCE_KEY',        '<BqhDV<$KDDZvOP/a];3O2Km.VW>lVUVL2<sv&n#{=)U5%.!~J7gmmA[cgDibo+2' );
define( 'AUTH_SALT',        'x!pds(tGO;o-w=Yfik=2`9~v0[kwQz{YUW%<.hEQ_HRzZsnQ7jjs)KN2wMN9w|6I' );
define( 'SECURE_AUTH_SALT', 'L:PirrT*4f5E?Dss6<=MVj^il=@[yy*mPc9q-u7;>Y t0-mcLtjx4Lt+D=6K6Z.g' );
define( 'LOGGED_IN_SALT',   '%mN`:ut$0{M?})<95`#|0(z=),nu-N;fMpEgGH{G!z[%klhdf(r RLnJee3ev/~I' );
define( 'NONCE_SALT',       'i8%v*/.`VB2HoNu:tM[=uB~id.3:#EG8~72&`UD;Kg!0,@6*r9w:UQ*i`3l$L5Wt' );

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
