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
define( 'DB_NAME', 'tourism_db' );

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
define( 'AUTH_KEY',         '@8(67<dx5<_BA$ (Gj]iF=ilV6yaQLG@J:.?{4VI MOfmhV ?ln!k9k?!DKH:!}#' );
define( 'SECURE_AUTH_KEY',  '__dzqyBP_CK7]XLbPou59JsK/ A]-BVhoI>U6w;VcBP[Wc#D^.pG{d&p6[a9^E{#' );
define( 'LOGGED_IN_KEY',    'BA&( uPWa1h`WnX?oR79S/0o%Pu/>X@~Hfh^lP1Tc5P@V]-L?+{AY?eX^)J_VsG~' );
define( 'NONCE_KEY',        ':LU~A/>vb%td73bPAPuYs1ah*1F=TRiI>%dVyyK[6~7H!5J2[mZ=K,vYCi&9S-TJ' );
define( 'AUTH_SALT',        'J~,3v;A2xF8/=b_I#F?JK!-~ 3{PI5=;T=&lybsdv7~b}OYGeW;T_Ret::O40hl4' );
define( 'SECURE_AUTH_SALT', 'NhJB7S(K$%|2lpmgso9>]:N57_:T[A`RqiJ_H!d-@),^:b$d5ed@8N[#gik}=`(W' );
define( 'LOGGED_IN_SALT',   'Sppw#rJ^Zj>n?]R.)6)0$xFdszE:]1eSm2F (Y%X)Q|c Zsr62$~pq&~)T8d)!nP' );
define( 'NONCE_SALT',       '69?q%*Z)*-5oj+jJKyrD)qvW@4)9O>_$0np9lj9G@Ks*~{L3Ru>9TM*2.E]h#dCo' );

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
