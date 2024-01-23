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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'Danish' );

/** Database password */
define( 'DB_PASSWORD', 'Danish@123' );

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
define( 'AUTH_KEY',         '6;=W:k`{-W0[f9A}a^h{:OZpHh1FMa:;]1Y9uYnv8skCcO [!uDe]y}FF73I2&s<' );
define( 'SECURE_AUTH_KEY',  ']224s@{92|!p#+ VfNP@[cM[;Kn-ow*4|5)]aid*))s]pxc[B=2[jUeo?E`0L/_|' );
define( 'LOGGED_IN_KEY',    'I?{ h.VHNC6jZ~/S~:imqZ/HlMX~R>`*-7L|~hiN:6kAItxkpOnK0yf5z_32FS[P' );
define( 'NONCE_KEY',        'hrFGnRSXbW;rD_yC$Jyo%r@iZiqZ}JdoO8diB5qtq?RA<M8]BWUX<b H@@z(MqW8' );
define( 'AUTH_SALT',        'sXq3axbaN_Mh>c#QI&^0oiEI>< -R,va/,T/z m0?Tl5$e,s*|sKJl 4A78L1`vO' );
define( 'SECURE_AUTH_SALT', 'i(<YM{EsOcHclk9UX#6w@L_^oGcTXHR#9n1^t;0I_wp3JNpOh089aew!0C,)IrBA' );
define( 'LOGGED_IN_SALT',   'f4e&RDIn<BX(%&&ms]$1,r;J|W=Lcc;<DD$tk&$~Kmt?zcY!zg`}dNn4u:tH]~:e' );
define( 'NONCE_SALT',       '1X*^|euw=[@Y ,+:%wFaQ}P!I<`dLCTKf;(gc4Gd$j2Q fP3L&cCrtnh$p&|a7>>' );

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
