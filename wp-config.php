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
define( 'DB_NAME', 'epos' );

/** Database username */
define( 'DB_USER', 'Alex' );

/** Database password */
define( 'DB_PASSWORD', 'Epos4119.' );

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
define( 'AUTH_KEY',         '-{oO[Z3=>rI<bIf#=~K-eST3Ww!1[%V3_#2rA6<yy!)%!7C=F)L?:uNLZ9w{Mm^v' );
define( 'SECURE_AUTH_KEY',  'f)e^`9|Vy2-zT3&ijuF[wh<.9=<;^CR2c%)l,0My;q}YH>vsPFQ3?d}n.vdkMG>h' );
define( 'LOGGED_IN_KEY',    '>PbK7%6%_OdeeOG=%Hz2FG,&>td~~!I?so[t)5clv]O?plA-t!Jr(^)%v6o+[}m]' );
define( 'NONCE_KEY',        'uGSc:WFHx<P[@BH7/qrLemxLJ@ 07K(PP,f{59njA2!GRj@]Ic^1_Y#a3q;@#l2$' );
define( 'AUTH_SALT',        'seQL7K|:*U|[OM%|!>WnoQ@zj|>&]iFO;Xbot=J3+8XfeM^J)BpDHOoB7|jEVtg*' );
define( 'SECURE_AUTH_SALT', 'MnZ@c+u+Gc=<[TyBaj`,RW9sV+WwF5IHL&z)H8Q$jNl4YIe$Tf{xaAr/G(f/./,b' );
define( 'LOGGED_IN_SALT',   'vG_L0[ui>m;K$2mw=w{iqKsjp3j?X{92ycRtpON,0E:+%e+mxl!eVE#[v.BRk/0j' );
define( 'NONCE_SALT',       '7]X{(vpX*ER|XkNOFWxW0!<z%<4Q|7Hv&MlK(-PUG[dXp[0Hna,wbA!{Ry-rO4N/' );

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
