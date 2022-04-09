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
define( 'DB_NAME', 'ACSWebsite' );

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
define( 'AUTH_KEY',         'guhUMs}YvXEy/DgiUn`2`q?8S0]C[aq^_Wj<-Q5KSNcZN{ZvB~!?B#lbso|h&8!<' );
define( 'SECURE_AUTH_KEY',  'HKKVDH[0/JFyS)8/!i]*Dy|W+/%86)Z|aD)*R5,2F8gvb]vk%cD^kto*;xX@rk]Q' );
define( 'LOGGED_IN_KEY',    '<:Ng_>UAB`KPJU9vGM[DXR&9!u FfT%7fBKgtdWtm<w`P=NMiX4W;!#LV^&00[H(' );
define( 'NONCE_KEY',        '[T+=cE&;_evhM$IR/R(XDW~U{TWHZ4j~jv^1?zv*ukm=vn}m^_+E694`,/w*Gre?' );
define( 'AUTH_SALT',        'sG@7,*mc`]z5a93IZ<Yh4-tv:~gB4I`& ?PLX**D82nq1DUr17e?noX)4LzUo+Cj' );
define( 'SECURE_AUTH_SALT', 'bbdPH#CN]OQA3)M{,{w%V2C!a(+!EM@bX6&s#Pc]iXqtp$ar3fK=HVZu4:{5iq7u' );
define( 'LOGGED_IN_SALT',   'UdvWRF^LF9U+FmlLY^</r.{;#z?|_Sfe7Q6.?]9Zbkg~,I:r_+m2{fTb%p7J-d,t' );
define( 'NONCE_SALT',       '-J~B1m$p.JLdEj!2&*APhAgH9C0h/Zf067{PZ=fM5K*=?|q(7;?Da[]=0W%v,6w!' );

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
