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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'Z@-N%s%MOxQTn*d2=ox6[gzV4iWk&FhKru_4R#)Vr)Cpxoek_BJsXD]%b32A<BrW' );
define( 'SECURE_AUTH_KEY',  '5!g[mEQ{I[bmjyy6DJF7l<>^;A(kY@#b):BA*2`h9DD`I<od~u/c>-A]DUjvcF @' );
define( 'LOGGED_IN_KEY',    '~9df/C1!ZDSie)@})I^b|&}E|Xke-eR@!,+>wsVe0xc>_L6Z[3RNothrpv&@b8}m' );
define( 'NONCE_KEY',        ' NWpwLDH2>v:>2Jn?`utB=;G}TB#i1rNZd#%41#gPKY`j$?lAm)A;CQotz1(Nveo' );
define( 'AUTH_SALT',        '!iC#<&yuO<mr&sS/@?Rf:TBVY`)Q+OiHDkO?~T,I5035;&;& tB@bWm]]#U7*0yt' );
define( 'SECURE_AUTH_SALT', 'JY<8z:)|bk|awq72$9z}G9W2I5cVof|)h[n_1U}@shith[_U2*39i NQgKV401M8' );
define( 'LOGGED_IN_SALT',   'm#.+R+:EMg3U-=u;+s1?u:[skg+Hk2*w;uzu4O@5n5~,>Yp4JM:|Iej1tnyUC6e)' );
define( 'NONCE_SALT',       '=Jb7]29`7{Ol5ESheuj#2=,A|>N|Ji%QnW]>-2tign?C~a(JE[6 ^&}qRT07kZTX' );

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
