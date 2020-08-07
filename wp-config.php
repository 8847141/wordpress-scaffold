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
define( 'DB_NAME', 'yunluwpdb' );

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
define( 'AUTH_KEY',         'S:gYAP{G=?*UU#$#{_?nC7XLqeebtqW,/@MC?Z[. |-%we-X]<Ukm4|LjY`(}jAQ' );
define( 'SECURE_AUTH_KEY',  'w(A~j1!@>xJEHIZCheu@rM9vTs1Bqwf&]y5c|zG>fj|0!}qXJW5^!%jD9AiR}P=r' );
define( 'LOGGED_IN_KEY',    '/.+ylJf~{<[YE-owa,mt>sz[-7P%e.*8+zHvs5?w~qUhT;B7}W&CA~+N%!ab9;Ym' );
define( 'NONCE_KEY',        ':dZw?^^W2,3W(pN*P&WaGe/3Na<@NTT<0qKwea AnDUXY$m?AjpKn+4wLTtHvd;s' );
define( 'AUTH_SALT',        '7=PT]VtqsAhH0o%lm2^fb$#,YF}+yg>/1a3eY)Z?%Qo|eIe73GR?I;dS-,VM=R;<' );
define( 'SECURE_AUTH_SALT', '*BBjPI5x(kC3l=6^?nTT5n?7LPk}#LC}Z!:3=3=USQ]a[b%f>/Ez$<9]bwpDY0&q' );
define( 'LOGGED_IN_SALT',   '6,:Jo70^nQAWLH_sO/Sjde_rhx0[f6qEL8u&OX;NpQS#G:eZ|,IM-~R7RpnFS cm' );
define( 'NONCE_SALT',       ',J.rk3Ty^hJ*#%+G9_i<lI=Bu<Vz[Sp;0HFY6./V7@KL&Xw0Yt|Hb%jV?$kHY|8<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ylwp_';

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
