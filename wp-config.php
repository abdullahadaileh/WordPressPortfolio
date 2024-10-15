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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'L-7$aY@Mh}4CNWRw#Hd7-O]3>erjtc,)tII_<jH]a>+u}#<@uuY<Nj[CT_{UA:hv' );
define( 'SECURE_AUTH_KEY',  'vSmwm4y,e,PqI}Hc2mRiz7_.J>MW4q7r.j*n<C{ GkN#iQlcmm4ftftll(S<(`py' );
define( 'LOGGED_IN_KEY',    '`hM/!)G*ZQB%.o=>h7/C4^LNr2Qhxt.VkZ^ W`lE,vnbc0>x>Pj+h[FnFWE)-n*&' );
define( 'NONCE_KEY',        'i4t|cFsyyM9j~T&^T+`+fFl.4pMjs#Ga~Bzzn,I2O.|mg|TFs;W!QjDyL&|K<i9z' );
define( 'AUTH_SALT',        'H45Nx0zH-hQR<TegTK?vzI$B#[-eak`j~QpJL2<1JRZb`|b2 oM;$M*_]S{+,$42' );
define( 'SECURE_AUTH_SALT', 'd9]K`*HQZ}>9^p|1)#+=Gd;sj|!7rhnz-(ToTBq}]7;O/w/?m|DkH.rqRw%H7MQ,' );
define( 'LOGGED_IN_SALT',   '#yhFg kzC)Wh^Y4Fa$l*B.I+@,|9_vw2*,7JhlnB1$OM(S3dzkuf=cZMr>F#^u]Z' );
define( 'NONCE_SALT',       ';kcv}XwB@,TTA_AVl`3}rSZOQ3v:hdhO)2.W..05Fc j)uiLbu:=-F=CPomM:b[Z' );

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
