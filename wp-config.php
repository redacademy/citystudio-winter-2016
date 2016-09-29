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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'citystudio-winter-2016');

/** MySQL database username */
define('DB_USER', 'riva_r');

/** MySQL database password */
define('DB_PASSWORD', 'Sham21bhala');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':/R+YX#B_dWm-G-|ZU=$RvH+<s9|$B^k?X.1hF6Vw(-Bn#c6UxUl&0Pd=C%;.=b/');
define('SECURE_AUTH_KEY',  '(GKyMks={7E<E[-Y8:@Q>8A1{6?>|)W([^_-9L9 MX`L=^zR-P$)zS}/`O1u:,e|');
define('LOGGED_IN_KEY',    ' @?ozX><5)%j`EV:!Ngxt~qi|5Qs`DJD?DK-v)1<5E0lW6ILC]F(C$4-d %+yc(z');
define('NONCE_KEY',        '`QyZ])l@}/@@#_Y/g9naXM(U<`?}ife(5!cvyFLRn8XLG/;TL`IK[UY3--L>W1E6');
define('AUTH_SALT',        'zj{1:);Hg~#|pS#d)(G]:>OZ#uBz4Djc-*~@3C(!}v+y>HC @w#fG|,hl]bq ,k%');
define('SECURE_AUTH_SALT', 'C[j-wV2xX8[J0m]kT?709=j6+3M7g,Jk%lB&2Ji.}DIxtaa?.+ Di-[c[l7-h>-5');
define('LOGGED_IN_SALT',   '%6K$u+?q:H&J,K96<:ErS+QY7EnLc!n?R=1KiGrLqp$`ci2gzm3b+yRZk7?lNV4W');
define('NONCE_SALT',       ' %wx9YaMhn+%z+G{_JNX[)4nLm)RT+v_omi_WJKM-SQ2E|iY?9j&iPS]ez@=(cg9');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ra16wt_';


define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);
define('SCRIPT_DEBUG', true);
define('JETPACK_DEV_DEBUG', true);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
