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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wdpf60_wp2' );

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
define( 'AUTH_KEY',         'hi),`J*kiw!%f%Za`85..GOIK#M73vpKKv&{82f.?BUY(sPi dv]XVETx7i{mx%v' );
define( 'SECURE_AUTH_KEY',  'PGDSdBS2~Xd}:L&D|.VmXf|r|x$.eay`BSXIXu1v]rJ;p6MCNJ0.~)ya*0H7tOV}' );
define( 'LOGGED_IN_KEY',    '%50^~Pkl.>WQNF2GNl/0@(rl^P!Rk|J+nb7ru+C!,WhW,Q9<LLB@4J.qD q{no5X' );
define( 'NONCE_KEY',        'N3,J&IQB?Hx9dsL,$MtLJAdg4KHm#,^t6iG1s-Cr2K;+14BAuFmyj*vynH9BA[%,' );
define( 'AUTH_SALT',        'Z&]Yk?=bFb>v-4F!Xn6}j%!BB4~/[A~{tn7mu3CKUiF7HFy(CqjJ?ox%6umu2VLf' );
define( 'SECURE_AUTH_SALT', '-neZ?t`Q,JgX,r_Iy$pu_Gizl5vy)|Th4}>b>iX+&&*R_+69%@c(3lm <7KQ?,<(' );
define( 'LOGGED_IN_SALT',   '6|46HTQaO%g CDuJ*&UibT27y3!>p]Rn,9{4Ye)*Ij6kB|3)2~Ime/1j_FqONKny' );
define( 'NONCE_SALT',       '-_&`|)_FYJh8Oa+Tj&f;RcUwX}(|(3n7AylK^zzRQjoy^k9VkVfhI1(D39Bm<h7g' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
