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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'ackomputer' );

/** Database password */
define( 'DB_PASSWORD', 'microsoft' );

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
define( 'AUTH_KEY',         'A>~Fu1Z:lOW5|#}8m`1!IE{q7>h_;isE&{ypt|i~|2.{v*]r Atl7`M788f46Wtf' );
define( 'SECURE_AUTH_KEY',  'vh1zFXZLaK-:;W|L&fb0I)l3O*k/@3A~!~k8QL[-{zKMAtq&k#aA40ALo#Z4&/ia' );
define( 'LOGGED_IN_KEY',    '6SmXN<pK.OG%_dV{JKt^i*aRC(cH%yC6fpCcW!:B}sQ}d<Rj{n1y[54>Bpn=E2cM' );
define( 'NONCE_KEY',        '$5[HIj.sH&sGbZxoC`l]vE7z<j5XflM$5>D|OU*:qCjJ~ozoY~joZ`4X+!Tj,NLe' );
define( 'AUTH_SALT',        '|$bMg[6h 2V7RtmE4Lz$A`>UDH7BO}37WiMLJ2JOY$ZE8ZfDPm*<%zL37*[9Iair' );
define( 'SECURE_AUTH_SALT', '*t?pBmj]w6H[i%![IU+MT:in e&k9QmF9k+3$]y7zJQ~n!m%MqbPykI&O89mnGI$' );
define( 'LOGGED_IN_SALT',   'yM>GPYpM&[$=yX[s][B.l;V$Ib(F{N}$jx9A4N.R-lyleYS8 xOETPYFf|{6847e' );
define( 'NONCE_SALT',       'B(CO9gQsBh{6sFYgEA)g3]R* F:o{qJ()[buV{Cxt`iYo^j$:|Bhl(7?HP7`iNUA' );

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
