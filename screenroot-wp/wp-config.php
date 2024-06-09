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
define( 'DB_NAME', 'screenroot' );

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
define( 'AUTH_KEY',         'l,1zqK(T6[lL(|T8r]f^G6xbPLo&DvyQnth/SYz|,ueoVSk0U48i_8FA?D_YdcaH' );
define( 'SECURE_AUTH_KEY',  'k+4+#7kRcW_z443*}U`0&71v>=1olt<NaElV(i;:Z8.vX,MW} Ok5 Uw3Oxlr,e}' );
define( 'LOGGED_IN_KEY',    'YpGtxP.;6!R_u4W^^!Mma*<.i$tfii4p. lJ$d[||9[&$JEWqdWxa65E0 [UYDzn' );
define( 'NONCE_KEY',        '85z-G_H.i2Is*D@Trv#H%4Y+SEF7$d_Bm04RBZFu>+i2[2r}V.uPsHYtLmo3Kst_' );
define( 'AUTH_SALT',        'gs-7L({VJD:2&}fFzbxMQBT1[4sFI^]0?^lfO]6^tja59hckJWvaGq4z2=LMJ!V-' );
define( 'SECURE_AUTH_SALT', 'Z|>?NBz}pfW)MkRA~@*oJ*@y34URhd9QnV@#4{Nt</c0kjB$K5w_veo!.H^Hw.,,' );
define( 'LOGGED_IN_SALT',   'J`#B2tF<KJ@)~>}[93}|M:b_;!.C5Nju4(quQT;]{$v=,h;*gtac2n,RK{Y}k9.(' );
define( 'NONCE_SALT',       'tQgwkQ~y.(z~ESgbI=x^HYW|#tmKBu#ehz}GHRn@}i?hxe[)})|-SDXE}StY1bYM' );

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
