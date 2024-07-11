<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'D/pjry8Nu]W>&Ir s7QXGRu7T#lI^Mnaq[xcdjK&L]>=;oeEhV6J^^*cXz3w[AGb' );
define( 'SECURE_AUTH_KEY',  'yX#muc`!v6GMZqw_#}O^cl`S2b]G.R1O?YbEse{`_v5MXv{EH5/hxcZ^s)@`K-~_' );
define( 'LOGGED_IN_KEY',    '^[>0!K5war=t;21y^AK?0+_am%qpKb|`XXy=Ka|5J^Ryt5|0$XMW|ia,O[ZiVVE;' );
define( 'NONCE_KEY',        ' b6}LRff4PC^4FKWGa}rv^VB*485<jikIy&<k00@hpR:L;K~rXd(Y+Acm%^D`1BI' );
define( 'AUTH_SALT',        'O{0V(>[(ipn,nL2D=[q;$ghs5SZc7wjb^Vi=r;B78?6S1R[[ s63:;j2(,gBR=*T' );
define( 'SECURE_AUTH_SALT', '_nWb)*GMi>&.JUwN#pfS;yu48 .V{CbD=t1PqH+Hv!aU~@;xDGkeY3fcF@`}MK0_' );
define( 'LOGGED_IN_SALT',   'K9W0PIhIn0*!EV]70Kha[O=R]01Fv0G7*69mrH<@Dz(([`qf,#!%$,$W%]qNAUUE' );
define( 'NONCE_SALT',       ')AgT{.6Zcbglj9G>9qQ6E{ogE#P*Vpn5?8E-wOV#!+KvwI[.3* B]9Ge8y`VH!IB' );

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
