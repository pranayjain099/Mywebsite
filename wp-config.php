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
define( 'DB_NAME', 'Mywebsite' );

/** Database username */
define( 'DB_USER', 'Mywebsite' );

/** Database password */
define( 'DB_PASSWORD', 'Pranay@jain' );

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
define( 'AUTH_KEY',         'tO=-WD~P+V9Kb}Xu3L6)Nh^h!R_ZaYT-oe_7<ZNR28OT&9H73LCwE7w>,0d1OI<|' );
define( 'SECURE_AUTH_KEY',  'DQ#3Q[H3Z;/EoBpUQKWs1@wRIl!~$[[NM6wUzTz<8!dzD^*B0rInJ=CZx3k<YNY5' );
define( 'LOGGED_IN_KEY',    'IS:7B&{+eFLw5l-=I016JOf2 ;vV6W!)$/i-Lx`EZuG$/6EX[vudMrAY$Mj/@?hy' );
define( 'NONCE_KEY',        'T<=PelUy E/&%8doNQMrxD f;thn6/Rj8v]4&:gNC??<f%hy7sc{c.7GP/K*vEOZ' );
define( 'AUTH_SALT',        'HKi5o,w+m/#E4V&]4MI?y@%m|tK|a8^qf7C79@DoyHZ3qQC8=RiCOQ7hX,Ov9bXH' );
define( 'SECURE_AUTH_SALT', ':4KSl,Mi/]Z|rF}VfeVl=W>{w=b;1}IHBFK4veB#Yt#&C:Tw_lAb+I<A*zy[n)c+' );
define( 'LOGGED_IN_SALT',   ' vli><l1>fiD>2O6F<mhpCWiGfkefzv,u|M8:*28QUnpl#@wW>4H~|^mjv46=t?,' );
define( 'NONCE_SALT',       '}e-hAP:6IiSRSQjUIM:JD]a*YqW!E-8hpm~;&8ayqnUO61)=9Hg_:CBxli*<ic_J' );

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
