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
define( 'DB_NAME', 'inception' );

/** Database username */
define( 'DB_USER', 'arthur' );

/** Database password */
define( 'DB_PASSWORD', 'toad' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '@Fv2|3QqqL^ Yy-zNy$.|Y{^J;g&JDrsb7`nfX?/@ >raoOsw$L..RR7|.m#UsFq');
define('SECURE_AUTH_KEY',  'Lp&{J#5R)J}K5KEpSiz2H-IuA<V$:54]]7^2h*d9>o=8;+#@|b>b1{?u9}[`TCb=');
define('LOGGED_IN_KEY',    'I3XN#Ri:m11DrPu.ZSuE&Xt!+~fG1bx];|4Nxw|+DAa2ze~JO-1LmcA/28lR(0$s');
define('NONCE_KEY',        'if Q%w?5.BF+0 ?j6Qx,+hM!0UA-7,x6!5z_V Sb,|*>;:&<c v_it-2:MpW&Et.');
define('AUTH_SALT',        '8yYlb D $jmJ|dq6b}ZBq2)0)/FUT5~}i5)W[D5+n#9 e`gO7<$&iCIF~=yLFv[%');
define('SECURE_AUTH_SALT', 'h*,YvEUh+6yhwE+{i5vN}Bl-}cNx~$YycI7~1Y|9~5hy:xmgx~[y}U#%wmgfvS$l');
define('LOGGED_IN_SALT',   'Q9H9%F5=n=cC*>j;J}z+f-0!v7^kt4,1CvVW5 |MyR]o/n23-LFzc!h51|HKNMip');
define('NONCE_SALT',       'F+rL6=r]OuT15~BABI)9zc%gv0w!-5+BeLMmuWElj_6U `m[(;q]sv[]([7:zce~');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>