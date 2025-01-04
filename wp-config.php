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
define( 'DB_NAME', 'firstwp' );

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
define( 'AUTH_KEY',         'FB+zF fBIIE?dal=;?N19 ~{f%r3`opRF* C?Yz4Pt,be8{uTs]QiPD[nN?vLzrP' );
define( 'SECURE_AUTH_KEY',  '!:+=A>L4{EXRh^peYvB@Y7^vdgwfQ~_EHdvovMkhA<0[L|=I.J+m=$^*EC/^aH<2' );
define( 'LOGGED_IN_KEY',    'Fw`Zl03EE;+F;XSw1a|;?eA)FmDi#fgLL1};1Y% M4[%pIpA1SM!Z6[UM&PH*J;5' );
define( 'NONCE_KEY',        'b2u>,Vn-:)>C=G#`~DiXP=kG+dz^yHODYbG?w<#/@_W alob9o^sPsSy7(}I~cDD' );
define( 'AUTH_SALT',        ':ZN>HuVtHO^S/y@ko1>8QoDDnH?5:s]9,~TrOv,[DRWu#t*+&(F:iQxxx6DGJ~!}' );
define( 'SECURE_AUTH_SALT', 'm3]R/d6ro-E2<e]i~lW{YaAy8Sfr%p)|5o$z>>[g}U}q=(Jg#02vGA2_U]{(pDS6' );
define( 'LOGGED_IN_SALT',   '3doCi=W)mXEqo&34ILz]k1;Rj Mq&?qJqm>n~M&fiKYf2*F5Aq>ErObdc<]xM}#5' );
define( 'NONCE_SALT',       'lRSNRoYp:V|@mcB`_MpI.2XiJpKm/pmi{Sa6Ak/u_xl-,UEe:/ulrt2.sI4@PX<B' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'fw_';

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
