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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '<)iam%$ucwvo9/Ud8?=o6sgtM-JUq&G2tEKVs|Gf90cc;r|M|/&BQ1-m4}rM2D.4' );
define( 'SECURE_AUTH_KEY',   'F<.?A}H{kH!4V>DJkZihihKsTs/J:RKF6@k^C0dC`H^3It* Bnyu|<]*%,.p|?6r' );
define( 'LOGGED_IN_KEY',     'o{N0ti(OF3L=kz>c;Kw =5Venp7u:3ycT;M^KkHOL/+E5-T.?n0(j~xQaZ{N,CGt' );
define( 'NONCE_KEY',         '<vOz0.PXHzvGrF] ?SL@+$`|P`E;x{RoOBc!Ro,$P_9@;,2sR_2Q}8hw-n!U)Fw9' );
define( 'AUTH_SALT',         '>C!6&jC1,:GuEJ*1i!s*-i_ZVO2ldw]R]|bp|NU-AZZHwrdlrr(jlU@8KFL l1<B' );
define( 'SECURE_AUTH_SALT',  'YOsZ4T6i1*VN`<Q]t&f1:DH3NZ4Lmw2`xKmtI<[*15ovBa,j/453-2,Zy=dW^{uD' );
define( 'LOGGED_IN_SALT',    ']syr-T_E*&aj/}aiZjI$qy8}|bQd*j$u*d{ME ^-6VC}EkJkudp1KL9U[ aNn&mp' );
define( 'NONCE_SALT',        ';t W,qcTk[wSeRWqt2%~cmK55fg5rnwu&fdR3cOChg5y.[eS}uqmOG];)T*0X2J,' );
define( 'WP_CACHE_KEY_SALT', 'tX+hZfWA~PXizw$Ryve%< #qjqEYKpr}iV|=+dH|29W%9GqJ.g&E-wb-_J!M>3X+' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
