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
define( 'DB_NAME', 'the-gold-table_db' );

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
define( 'AUTH_KEY',         '8%XR>Xv!WK(wE{OoA,6NV+X,ItU94nrLbi/KF,#&C;NEq%VZFye`g#di2?{!m?bS' );
define( 'SECURE_AUTH_KEY',  '0HI`#<h{2FXMy~d=ZKNsoI aD7eRY]$X+B=6B}p$vk)aHoM!}Y~KkCjVEv7!F77K' );
define( 'LOGGED_IN_KEY',    ':l@[3sg:+wWKjA-@F<D0LtcE1VhD.M{.u$32Fu~C:.oD8<0a`{8;x1:2y^*ZhpS]' );
define( 'NONCE_KEY',        '31Y}4$qUoD|_6BuEM%M]4?]HUEvOyi`mAy_-14hiUf0+#QgW9}W?EMP[4Pd#{Q@/' );
define( 'AUTH_SALT',        '@V7m3nQGRUeC=z4>$h?ZKf(93,2sl vr`FE62vA9EvgZb9/G1i.R!bX;c,o6l(uH' );
define( 'SECURE_AUTH_SALT', 'l)~F:&4.w,>I2[bGzh0qoi%&:!ZPda`^3gdWRi!fj-_6P*P4;pO$~9mKXjWSXWx~' );
define( 'LOGGED_IN_SALT',   '?8v).&jj+f1@Vc%J1i[NRWiucULV`G.lh13`W@WTr]tN<in>p)_-e.4&,.GM&&^s' );
define( 'NONCE_SALT',       'yxZ:^G{3d,-7K8W:$vS<4bLG1mqt67TNK/c1yL+EiZB.^<#)4J{HKv3tNS:1 h%g' );

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
