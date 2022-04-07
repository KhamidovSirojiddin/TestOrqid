<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'orqidsoo_blog' );

/** Database username */
define( 'DB_USER', 'orqidsoo_user' );

/** Database password */
define( 'DB_PASSWORD', 'Hdne#@8snsaS' );

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
define( 'AUTH_KEY',         ':hmrdj!<,Ne}z[]9KHR1[^k[&O/9aJXLZE<U~1.~-(-dVwMCNdg/N7hzma9/K[;Y' );
define( 'SECURE_AUTH_KEY',  '~eHnWb-^V#t)OhksWIRGc[3Z]Cp`NHe$V,s?7nTP??D5V|^GD4-Qk4UW6pasLq*{' );
define( 'LOGGED_IN_KEY',    'B#jYx@^*Ow-6u$<TfvnE)ISXR#B6Bu3/`/!a(/`Fw6BzZxWh^1=Z$kY1Dn:B-I~#' );
define( 'NONCE_KEY',        '#_i89cux|qq$RWwNzZzc<d0,sNK/9FZNua*m.QgVCqmr48B1nO)9$4FybQ*Z7Bia' );
define( 'AUTH_SALT',        'NSV~!Tjqx&g*7)das=^,w:;tH&g>}.4:5QyioQ,_NiRC4buzB;jmS2pApxJh1DJB' );
define( 'SECURE_AUTH_SALT', '$HWv+k[DiTwxOuN~KL_Q{>AM@Z9i&H}*3M/x;=Kfir/{ g1u|l.VieN?{~BJp}l>' );
define( 'LOGGED_IN_SALT',   '@#a}d8&7q[fCbuY.rO+uwv(,(emp0[7^N8`dzkfw$dJ@jQkbGw#o;>rXPy(BdLS!' );
define( 'NONCE_SALT',       '7byj6CeC5_VoG^8(~3pnJPY5k^.z|;xuZe$6+T[iTpZ[;czp]Pmt!s+DeFiu-V>b' );

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
