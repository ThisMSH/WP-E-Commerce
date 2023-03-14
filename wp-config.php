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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e_commerce' );

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
define( 'AUTH_KEY',         '9X&M3?927}eMzbAVZ`k@l:(lL9^-LSrS@tXw3HhKv`_p$b{w sF_*n%p_+<D@h $' );
define( 'SECURE_AUTH_KEY',  'j[Rjch6 C_dv]t(lq.&%(S-#U!bt^>3Vs:3?`.nRl<[RXT&_N~W,iV@2VQBs2Fqs' );
define( 'LOGGED_IN_KEY',    '=p-oc$2t`V!=!Uxs[g[q)sw.!vpH8znB9p/Zc-7HpL0{M;mt3.Bf?jYJM98Fx:@f' );
define( 'NONCE_KEY',        '-c|.4gZ|J2cSykH|m`m--y>xlWO,.4nc%Rj-C5PQ)c!6OGAnFBg{Zu!<~_rB/C[%' );
define( 'AUTH_SALT',        'S6hb= WjL&uv<s:70d,wk6zLWOoy{cW%Uyn:Bqvci+3X39VS8q-gjS#it,}^j@Wi' );
define( 'SECURE_AUTH_SALT', 'aP_#(^cdzj|CEZg/)NU<v:/yUH5X upf_Fl>IHTK?=q%;lje96ewI*7=5}v$z::Z' );
define( 'LOGGED_IN_SALT',   'ux0(!k$)b>,@{LGEm tRR$KA+eJ1ZwUtMm vj;:;& >/yo(c5-{#+UkDxFFbPE7-' );
define( 'NONCE_SALT',       'J`VZ3e`%OsFFo{x6ZCCi[O_vL/e|IGW|sNuA8gmnY8CSRm%_pcsBA=EZj:*vt#l(' );

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

// MULTISITE
define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
