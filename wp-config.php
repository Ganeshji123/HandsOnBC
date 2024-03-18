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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         'z(f`(~H9PWlfxEh&jNOUCg[RnU~Eod+Dv]:NVIGYglgW3FfhG@1;kkj?qj[t]^`^' );
define( 'SECURE_AUTH_KEY',  'Xm1le9#]$!`xQ_!cnMuu9Gr|Cy;N4{qG9#a~B4#Y8LG5fNdIdes~=*TSGXe2y_*~' );
define( 'LOGGED_IN_KEY',    'DSplI6n#b-6*,y)Mw@*qWylr[f}qkTj&pooA|<(k &o*)v,8kp^ *)q}arCXHat;' );
define( 'NONCE_KEY',        '1H**O&g%@9:jU-jEGbyV^xW;xCs0wY8]!/Q%QAv/fzKS~sNOZ~|5RZomE2k1fvd*' );
define( 'AUTH_SALT',        '(&d<B|+>/*QdlvFsA_*3`M8a4E0CL)F(dpD=9I_:8/UT7w&TIBP>>ih0qw!NZZx.' );
define( 'SECURE_AUTH_SALT', 'hCm{Je+/a}~#L]zQ,]]@CYu]|2&HMvD>/f%/3mr@/aIo]6 >d*9]|,Z9L__!EE6I' );
define( 'LOGGED_IN_SALT',   'O|D)WoUh,BwQ/(L7:}yrv$;e]+(STBW*/kd$i3uh6-7Or_Ufw[Iy?fdyM}$uMWX2' );
define( 'NONCE_SALT',       'Vh#L>9nmqvy@%Syq:&$,jq<_WQT2;w!](00M8UV1qtQ6#S&n5:2I:J?@S|3?_X|2' );

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
