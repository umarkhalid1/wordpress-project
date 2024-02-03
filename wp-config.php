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
define( 'DB_NAME', 'caterserv' );

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
define( 'AUTH_KEY',         'e/^O>oAF:WM(&hkQ]PQ<KPPY?xga&+%a53j;-)UphToe|^+.e=3AIz2AWSu);+yv' );
define( 'SECURE_AUTH_KEY',  'OJhY( c4dXNZ$ne_?e2EjaizK151y&QH-l9k&[2Qq_BT1Qv&/|%;RBhfJm@@@~OW' );
define( 'LOGGED_IN_KEY',    '-oi@G]~FDKYJDL[R+Kh29{RkD}Ye)8ZC20ch~eYYA70>1aas32WHE6f($}:8sv%P' );
define( 'NONCE_KEY',        '=*APw}&>!qnlgsaq2d~D;[m$xuP,mIq1kr7^ngUt 3J]Ht{h2,6J`9)cNM/IA1gc' );
define( 'AUTH_SALT',        '~&./0l2Ig{p[o.q=,C<u{C<fEDF,&#-V=#C@X4&tjtowX1R?e{:nJ{3b76+QKZ^E' );
define( 'SECURE_AUTH_SALT', '_5vY;pK <s(I.A/-uPXa1[$M%uY!n]:OWNe.Nv3}KSvTVLw,gBo<k{[vkD}QyJM*' );
define( 'LOGGED_IN_SALT',   'jY:BOGU_^aVkP{D=.4Q*rdv%;fN^8>G{DBk~R/N@BK/LsYL?i2<hsCmNw_zFV,eI' );
define( 'NONCE_SALT',       '>N%%b5d~%?9qh@*faW3#4>bcZ443o^^5!4)=E^]pX);?z}e#M74o<vR>_3ywo`+H' );

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
