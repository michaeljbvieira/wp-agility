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
define( 'DB_NAME', 'db_agility' );

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
define( 'AUTH_KEY',         '84Hr_MR/l2V>~*s!,SR9zHe18|<;&Zy^iN4+lk-x5#KpXyr[G=m._Uijn/oQ~:FQ' );
define( 'SECURE_AUTH_KEY',  ')ZrBz ?Lo*CMEK#OU1zCc9UW`boHrm/WHE:cLe_UD:[+w2<Bz_EO8P=o||I2.X@x' );
define( 'LOGGED_IN_KEY',    'dj)tKC]hm]f5v3vO%L6.1oL<{!gB9333bM8>,o+,LM4.L(M8Bd(FWg7=<PSZ wUJ' );
define( 'NONCE_KEY',        '|G?OxJhFqY)E +ljfvih&ND$DJqDsPZZ@|fBF^43[gOT~r[pK-!,],UCob$d<Y0G' );
define( 'AUTH_SALT',        'G*D+dSlRjT:RX{z(+nbRAAe_bYyi^5c! f_d$E;8U3[JkHp=M;x{|r.N+Axg0qY=' );
define( 'SECURE_AUTH_SALT', 'o2{J<MEFm{8b[AUq35<v_#YTR&Hf=84Y>dcbb]AJ]WAId-F>H6c<p+x&=%TtvJeV' );
define( 'LOGGED_IN_SALT',   'Wl-;.>PUL,Pt;2un1YIe3.H]`^(.9Cnj6.@jL+WHp)z7m@5FVb<7%%m3},iQ$6ZY' );
define( 'NONCE_SALT',       'lsCpH4A2`G#tBolq))K7Ot,z8gp^4lQR~XvP-5S^>wyLW|vfe6z;|WpM_SiJIVwm' );

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
