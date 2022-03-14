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
define( 'DB_NAME', 'aluraintercambios' );

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
define( 'AUTH_KEY',         '2E[mQ<xP)d(Z%~OBaR)C#PHG?s~92,w5sb$K8IL((pT),|3m1FUXN<V/VdQa3w/u' );
define( 'SECURE_AUTH_KEY',  'g{>mwL2A6YwMtI/) 8n@[AI{!V38NlyqSe:]b=yLd4Q!;|:zDJ/l;<-sc#wxJ$!o' );
define( 'LOGGED_IN_KEY',    'j^B<5S>s:6:9|Ke;u-n:F+/>)wP?m2A0^S1$|hCLD.|6-$h+.7yZ_mopi^iFG `Q' );
define( 'NONCE_KEY',        '>My}-befHAz4cXiiwW,v6%%YV8yTsMCMN(z@qZKDOK4/(7g,:2io[Q?=6Pdl3ATD' );
define( 'AUTH_SALT',        'oiAxk-eXhN92Ds]{BwH=lq_2.vKIN8!#Lfh(ekVw+t .6:8b:)@(^AyuWAA4)~Fe' );
define( 'SECURE_AUTH_SALT', 'Nzmv%HG~POY#g,,Cln973~8Hj=j9(,iBnaf[zBP@y$xJ9PGOeuNuir%T_4V%z>8p' );
define( 'LOGGED_IN_SALT',   '[1Oi /0k{;_d_lb2j,-EX>znd:76^pFtAWOKdX!hqd. tfQo2nw2i-O^[j[W+p4?' );
define( 'NONCE_SALT',       'GV]yW=ML53wFcuyDh7fsO`5&uy_K3y*_vyE&Zr1jE8n*,s}iiVTcAoR):cp-2a~F' );

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
