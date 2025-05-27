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
define( 'DB_NAME', 'varadassociates' );

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
define( 'AUTH_KEY',         '7Dt_IcYH%=Y_uGGMys?B1,t>%5/mr87j<qk^$G*SqNjToT]js{+$iY1uf{2bjPO(' );
define( 'SECURE_AUTH_KEY',  '{Y#aI9FW0$Ol.#;GZote6[&?sU5$sg^/wmewK^T873~G6#(W7i7G4T|cs`YSX(Hx' );
define( 'LOGGED_IN_KEY',    ')8_><7/ItoI>hVb`DJm>:X!z?7AC+|C>Xv4kGW Z6$}EI/g{P}wCO8VqSb2bc-fC' );
define( 'NONCE_KEY',        'erb6v/xr<9qyneBDb]xSXjP,uSrhF#:*[Z4q_m}&6^_c=]+>lmu/SSKKn1w_uBh{' );
define( 'AUTH_SALT',        'JNH;l0x65nUZ~8:P=>~&EV4W`I*n-!tjy4+*, yy[^gUea!*W9UtF5F)qOz34Rfc' );
define( 'SECURE_AUTH_SALT', 'ARn{i1N+jf,wS5{^7?s6MoYD8<IJJO5dO!43LiAuxHx,MgSZ(?Oj@8&k02uyoU6`' );
define( 'LOGGED_IN_SALT',   'L4@gYk:*@oj}?EQ.) N&/m6$c(oxstvWAxKr%xAt@^]7`jGEk8#zaMQbi3*X8zl2' );
define( 'NONCE_SALT',       ',LgypT#A9b< qN{*mi.>la)_diS7KeWEaFe5hs]lKK0c]JzCZU#<%<{2![qlP6},' );

/**#@-*/
@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
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
