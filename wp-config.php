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
define('AUTH_KEY',         '4;k%=-}27`84F+rx!9|y/a7=!0z<*pqZZ@AX+iSFC+W,-QgK3BBP^3}ZVzc<PKM=');
define('SECURE_AUTH_KEY',  'gC-P+?f,/}` 97xMvyxTPMq_7IV`|wpf$w^Mn [97/,K@-*|2)2B<pRnYT(<~jJx');
define('LOGGED_IN_KEY',    '#`BRV@*L|ham9-4*1>&4.q3WA@!A&ky~[89w#MA-QB^<.LW+Vv-zjdCp.6=*g0TB');
define('NONCE_KEY',        '}F*TOM]Zd+2+qmAF}/Oedybh pNWU}+<@p%[+YjRW-rS$S542b!k9FxVW@T=u4,[');
define('AUTH_SALT',        'Mq J0:g8MJ#k~S}`PP|?<`6qr2DW`PV4rE4+Zy+MsK41+T9|mwdt2nE#ED>+;Mk(');
define('SECURE_AUTH_SALT', 'GR-]hPt&x(st2[m8E5|c+(t]roT%ZO](vI*0YyjT`l{g-T+ck^NZC0l=Ui;pL.S^');
define('LOGGED_IN_SALT',   'pzTqG(n0rY3>F9xImDsB?S87d=cV|}jG5F4$j7:*um=gS|W5EDVYkFN++X%z)x@s');
define('NONCE_SALT',       ',>k5Emk<3[AdS+y+VO*[7(V%EKTTEUwO1qYrP@5bA`[il2!pZJoZ0Or.3;+h]6}=');


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
