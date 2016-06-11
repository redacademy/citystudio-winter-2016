<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'city-studio2016');

/** MySQL database username */
define('DB_USER', 'adam');

/** MySQL database password */
define('DB_PASSWORD', 'Sjbea5ratm');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#x=).|4h~S<j=XBD.[)EP})h n3i`oX2=d~~[>C@kW|s.jN^^5>zU;uQOs[$%x5_');
define('SECURE_AUTH_KEY',  '#3:(9Pm!=_@#C{nU}n~*/NrP70-w5*@`px,d}{dcEh<;30orM?:A:</ozm6Fa[]/');
define('LOGGED_IN_KEY',    'h#AAt8I{[r+yvpgrRob&mKC1LA}>M3-7jM{g$t$YE!|WpC[dTGQ_/K)>-,g0}!O-');
define('NONCE_KEY',        'P&.k &2hg%nv}9zM@}`FN/}v!w(,~HOd~9Ie5@Ws~L(&]zH{]!!{ hvAtP(EOTde');
define('AUTH_SALT',        'r~kC?TD&VQ*zI3w_:ju/ ?u}]y5dNPnc5w=(27$r6`fSovZ{ Teg>gS)Gjaz&}!7');
define('SECURE_AUTH_SALT', '*-BxsBr}:[:;M$Q/I*4$|7G[ls(iDe}LTObT8(pwB;=$ r_sEdgsZTKKS&2Y!.I&');
define('LOGGED_IN_SALT',   '|a@o%&fXZ$ Dr1j4?([J.#0_Ebg|P+-qF#_8si4+^j/Yf|-X|HJ^dPaD(;Oji=XP');
define('NONCE_SALT',       ',w9on<{nUZJkWkkJo2<axI>IGBEg}aG>V,E3+8t@>#E.~FSV1%cCdnv*8~>WEX#b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
