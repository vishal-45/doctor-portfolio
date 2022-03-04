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
define( 'DB_NAME', 'doctor-portfolio_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '/x`T1rr5In^KtafHFQ}Omm3W>WYh!hKymSm%zdHm)#23+TJ[.([?W&)_y;5<E[6r' );
define( 'SECURE_AUTH_KEY',  '],-X[D+R,l0#5c:7olX591Ri[n&/*V:Qf#UNS9QQuR0|Mt=iM@[5GJ[bB#<T2Q,5' );
define( 'LOGGED_IN_KEY',    'kDKNVi{B8k.47&?2f+$#3ZRs*NO-MN3z1D-i(Se`|Fkq{n/7F;=:) gP/nZ`NIi6' );
define( 'NONCE_KEY',        'Sgg%wjT1+z#Th2*@`Q?2}w4v>nPj5qz{nRfOxuKmNe1;xF|H=Y)Fqr;>x/v0/D5B' );
define( 'AUTH_SALT',        'x5*KiAg;Rm[+Yj1#8.6*~.h?n]nu+9ouF5In?voOW&6IDw!c(njGfW,,u&jW`j32' );
define( 'SECURE_AUTH_SALT', '-Mv,r()UYy(z.[%EZ^r:8-{I<DmxFT`tKaj-ss/W1zUV7R;#-#Po:>cq~H2iGQD_' );
define( 'LOGGED_IN_SALT',   'x=oR]+V3@,OFjFwtADz_Hr7Ym%vzmnK1#E#Fua|JnrC7w=G4NBuKz%M@/s:]Onb<' );
define( 'NONCE_SALT',       'HA~ZMqf$UavS0*z6{ozuWr^B#JaZ^?uap?*tS@qV7CeAbzQ{%P5R=0dR}[qHppDj' );

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
