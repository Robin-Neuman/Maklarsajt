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
define( 'DB_NAME', 'maklarsajt_grupp' );

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
define( 'AUTH_KEY',         '@<o_](a$ ^wfY4RG!U%W(R6T(WPo0!Qb`+mp/-|6I*+T6e#LWA-borg{ l/]S2Y_' );
define( 'SECURE_AUTH_KEY',  '`k,?-Ry$Ekv(S)hm6VA9ZEtOg|N9H|?sMVPF5CGeG+L)=i,`~Fx9rO-jlRg@f#=D' );
define( 'LOGGED_IN_KEY',    'Sw&Zb[4W&o]iH]x=Zf0boD;;jv3|r65yyhxazB+g1DbX8K#$Rj2*v{7;~J0NqvB&' );
define( 'NONCE_KEY',        'hj_R_qpev`!u$KCm$+8$Du`M{{(T>x7IbcchJr$u4MP0J&i{0JQ`6|{K{:Zdq^k7' );
define( 'AUTH_SALT',        'vO5g4a^Dr|0`=G{~kws{m@uT{IUVU+C~EyuhU(_{c&Yd)M{P!xcKwB!;n=YSLOM0' );
define( 'SECURE_AUTH_SALT', ';ci%Ih^y&z;?@#{?fZTM(T~.~:C2pt:j.S@Q=0J+H>(xDK1@Z6%b<>JXA_#LX#Ta' );
define( 'LOGGED_IN_SALT',   'yZMj4>QdKEBlNdt?{%O4|YWlN#^R8+#(U_RRb@k=4;gsB&)S~FlT^VkV1YHk#(mJ' );
define( 'NONCE_SALT',       '$.zURcDib OoY6i+!:~9*iP#QK^EI?Ds4d>7W04P|XL3Tc?F-or%fiy>_CI;n-4Z' );

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
