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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'admin-1' );

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
define( 'AUTH_KEY',         '*:Kv#OrIe06ZEGbuP7oue!`ZG$zh8e6yEFY)t4A*;P- -(aGCrXyZ_~m*L/-<s p' );
define( 'SECURE_AUTH_KEY',  'P45N~@qms8!i Z ]*H@:eJn,%9OI=|$S2rs+p#j>j`<ITR](XhYF8)d;8<oK;&i ' );
define( 'LOGGED_IN_KEY',    'I),zQL.v gL~@S:koW&85$&wET8P-#8-5Q=Ccec=Jg[:$9z1WoHltg>bt]H{A%r&' );
define( 'NONCE_KEY',        'lg-s.v4VBA/C~vdB; ];c[o~y-q)5zG?NTf$T^J&om(<;D])>fSxH*WsEk:[LrCz' );
define( 'AUTH_SALT',        'T~4D`v7:H0mTkU9=,Pj:/E9:,NbVri$u0L:nswBmOL0sP$>NMB7qN]:))_VN[5 !' );
define( 'SECURE_AUTH_SALT', 'xp1E4~(%F{h4yB6}a6KS]sc^5boY3x0wDhMY4,]5 q.LkuK. 7<]~R#T~u-ch+YU' );
define( 'LOGGED_IN_SALT',   'D<]Gfp7P%0xdPcy<]WK@/n:sG9L<]Hu:<a#kZHW{P}V=OX!|CHu),PWj> M@0hp.' );
define( 'NONCE_SALT',       'Yx/Xd9+`]wPd9Yjfuq#a4{$$~u*+vEWWQYn9*Dn*8W&jEG7dJtj3kmb`ihu16kG~' );

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
