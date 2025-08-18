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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'montypadre' );

/** Database password */
define( 'DB_PASSWORD', 'Gurumeditation777695!' );

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
define( 'AUTH_KEY',         'R.XADE4MeuYmfsLx*x)ls45;]KQodXV|qklg}N._t}*|akwT;f$aL&r_eAZW(p35' );
define( 'SECURE_AUTH_KEY',  'BO,H9~S[*FD`,*[z!yBp11@JvIbDGS`kAT3JqZ2m@3hXHopP7pcos}-:%R&.<l0K' );
define( 'LOGGED_IN_KEY',    '-}$6[_//yWK%.$aVyGpi5tVI^;mcP1nEc|j&j=m=F+|nf6Xew:1tSW/;jx*jbqB8' );
define( 'NONCE_KEY',        '?r1BA{#=mMPA[^HO;?&$h+(0/a&sa|l%grhEWc$9th.Q5;h (:0# 1LS^M[M5^nY' );
define( 'AUTH_SALT',        'l5n}i=boF91_p<>,OpI,c5)(N,6dZ,8n}(n/G >OXB..E7yuZ Lam$Jf<$F>Qn?}' );
define( 'SECURE_AUTH_SALT', ':j#`%`KeV!IP?m*5,L{FgjW7?cp+Tm~gMG.B|T_k*zgra/<_3]]7H0nZ;)eynsqF' );
define( 'LOGGED_IN_SALT',   ';C(1 9K-RoKg~v/@K{`il-63F1)3SFUvB| po2d~]d!R*$2<v5=`J{oOvGG)[mzP' );
define( 'NONCE_SALT',       '#Dw<6Fjt4FZ=|FPX$Jh|ZeVzHp=** 6{rQ=+&zm25A0`f8?bOb{au{]k >R#/alN' );

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

/** Bypass FTP */
define('FS_METHOD', 'direct');
