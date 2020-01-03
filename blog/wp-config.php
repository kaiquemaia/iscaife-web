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
define( 'DB_NAME', 'iscaife_blog' );

/** MySQL database username */
define( 'DB_USER', 'iscaife_blog' );

/** MySQL database password */
define( 'DB_PASSWORD', 'agencia@380' );

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
define( 'AUTH_KEY',         'JGzx7%U|mVJo5fCw{u|NXEy=>!)]wEMVw*2K ]z2_%W.F99nCg y;dQR4zv^F4fm' );
define( 'SECURE_AUTH_KEY',  'iR`%})s><%]YlRIiWk;nGIC7DkS^uCtJ`Jlhwr02b(564Q% 9Ag= :ZK4/~.0RYd' );
define( 'LOGGED_IN_KEY',    'A1bsewXeEBb4YP&{$pVvodw.ean8>3Hnpjq[H;]]xPY oXN#xl@p;XZ5zA|@Vd):' );
define( 'NONCE_KEY',        '4Xk!|=GS:w:uTem(yY>#_~fdjd:G/#K4=8>#+GO?#d|3#BWUgwzE6gF>@}<L#vp:' );
define( 'AUTH_SALT',        'nmnI5o&?qWesUCA~=;^&LsRW;9?nc;?Ek@MNN ?Jm:CfabMW~y6]/91}WzoY<yZ*' );
define( 'SECURE_AUTH_SALT', 'tXAC`*XnJ-A8fgpn`tNQ1hZm,ra^UvXx/m+ 5_Zv-*X:>y:RYzB-BTt^PHRv4Ba^' );
define( 'LOGGED_IN_SALT',   '}I8A1hKQRZ/fP @B/#d$@I9qe(0;<`dj*{Lr~mak-!k;Dd}lVG:P45A9sniVHVBq' );
define( 'NONCE_SALT',       '4jZjmdRY~[;gN{PCE%>>RWzQ2R&!)CN|;/&Kj+n)EgR}||KQV8f$k4q[in?F.Y[;' );

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
