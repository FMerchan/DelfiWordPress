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
define( 'DB_NAME', 'facundo' );

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
define( 'AUTH_KEY',         'lnd1]F$k]qN_b._Qz;YpH;H-4IGQ?ZHz/-8Htc)3W6$WfSKwC{!!_rG/Fx=c!dqr' );
define( 'SECURE_AUTH_KEY',  'cw1:HO|8ttF})LK&Sg;Eciiw~49I,^Euw.clcU]KU&~JD(R$dkwLw(&4===<X]Zt' );
define( 'LOGGED_IN_KEY',    'KGV{[1{EM5|J@yBeqm0[{l6ZNp6GuUZuS/vP}x|5ME}OT#>UCSDw@53.+BKnCXd_' );
define( 'NONCE_KEY',        '8^% I3{br/e5YKESW0;N]9,{2vUHy])}~iXWf,)<{= bH!Pt0;h}XdX)+3<j~)Dd' );
define( 'AUTH_SALT',        '&X[Llqm6)U(tvtAe%pE)UeXTc.4c)96&c@m@w(JX8,w=A:P2eA_SwGkcXK?PnC7H' );
define( 'SECURE_AUTH_SALT', 'u=J=#7_ii_a>|e!!$m4e>r1YDFK .dcp]}oM/oq4)rA`6`cQX=.;b93A/:_:Y[$ ' );
define( 'LOGGED_IN_SALT',   'P*lW|M2{urMIQrVaSL5=v13o 9Ho3[Vuigw$S/r*K9ahy!vgB$x~nR(r*`l7Pj#`' );
define( 'NONCE_SALT',       'nwxW6R|d}x7R4JPhn2L;Wh.iY@$@X]=(YZl]r~[#uWL%B@X/fmL+$U+<#y)k^=A.' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'proyectolibro';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
