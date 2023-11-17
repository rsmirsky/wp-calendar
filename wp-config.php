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
define( 'DB_NAME', 'wp_calendar_db' );

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
define( 'AUTH_KEY',         'cW{Uq^M8?y@98ryv0u1Czjco7J/}YzXQ$?JMrk)qf]mW$/VC]Xq{Z5=s>DS2c_L+' );
define( 'SECURE_AUTH_KEY',  '_~VZKo)X:$]nXWN2NLN/shmsYa7P4$TaDxm8x_:xvXF]bV:1_4e%ozuq.1RJ}Eu9' );
define( 'LOGGED_IN_KEY',    '.}IAgHaPu{|ocKV0pVnwY%Qk4-b(m|h;Wp_1[[++Y_.7`XD;)fS3hC3=?-XYK(U:' );
define( 'NONCE_KEY',        'RPa3 pFxie-y:0d;};X]E<hIWLE.,Bl.L<3PTfjli>,dBn!Yr/vgKOIsZnB([zls' );
define( 'AUTH_SALT',        '3C?7aE<3!#~fma-jv;y&n)fXfX{;{d*Y&PO;J0~yc(vQX,0:rVMNC2_Gw|Q#_,K1' );
define( 'SECURE_AUTH_SALT', '6L#S{-3r]|GQ^A<1Fy(cSyx+;_PO!*?qXwOghis+*dmr*yPLj$o*.jv+3%idE:D5' );
define( 'LOGGED_IN_SALT',   'Yvm@9`~8OXV>9P3rd9?dX,bb>3/#gSoaT8c@Ses0@W_/:2ACTlz[2GKD]jW,YTL8' );
define( 'NONCE_SALT',       'Rv33Lnm/_9~c`z71;y}zLj|AbB@XICe8xtD+LC|LtT:c376L.9?$$;w}C8R)=Vso' );

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
