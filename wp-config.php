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
define( 'DB_NAME', 'db' );

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
define( 'AUTH_KEY',         ':1t3&O)7zrnU?Bb|i52Y=b-}q<)w6.Y15dbYwD*GiSN33J~~g{5>#>{5B7Y}3zo]' );
define( 'SECURE_AUTH_KEY',  'bzPRt0Y[fbn`rWDVIBU0ng!8Z5)[}w4yz=P&j!;mBmtg{9WDUDJVeuYAvP<6-=#-' );
define( 'LOGGED_IN_KEY',    'L?BQtn,@jo670=^Hls3)KRI-.Ky<%HD)fIuj>%q<NthUM@~z4ht%U-RHU%mHdrq0' );
define( 'NONCE_KEY',        'J:=u)2%^c3YuaXWYLXNj(#G[fnBKBX4`?(gUUQ W(<bW0;X`Uar:h 5Yw7O<[ieF' );
define( 'AUTH_SALT',        'v9x!QS15W5T*1SfuE?S[8xC+]}Z+iT7L N44F=HiOEFM$A(KaCjcIAs4g`TSLyxK' );
define( 'SECURE_AUTH_SALT', 'y{2T,,+  5;55:hlO.uj@$zl9VZ?2CIO`toL:(d7h:av^:7V4A;>]3}N~^iSaD,H' );
define( 'LOGGED_IN_SALT',   'b^J+&*>q%m;o<t4fE>.K~Rx9X3o>+.X)o+8(|q_wrc**zj[rTB|n`Px0V%=^Cw]o' );
define( 'NONCE_SALT',       'kGw{S$/;zRg>7[m_m=6WUV^g<kc1)geX3aXpI;b#b|kaVXa|/[Jk@lQ7+&|+zd. ' );

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
