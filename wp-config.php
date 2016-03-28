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
define('DB_NAME', 'allbikes');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '=f@ToD_98/Z$mfb&RrA 8A.[V@JVzEx{i{a3@&8h6[-,Y}[6mHv_}r~OY/ck:3(p');
define('SECURE_AUTH_KEY',  'J6 Xb(9AN17bq#i#N-BH9|=E7an(|+1wOa2QAXXS; E7iF^3Sz_N#1rmu@-~o:MB');
define('LOGGED_IN_KEY',    '@CX)Yc{u)RRJej5+E,?U%15d`on-WvP4@2ioPN-cF)$nZeh]m`.xA(X?WB6 6dmD');
define('NONCE_KEY',        'T$=GA*+gg|AGlA%.#3@A;6m*L5lNZ5om0c|O5*+F* 4k( {rl|# 4cbp?XOZr;CQ');
define('AUTH_SALT',        'VO4Ua+M++zR1i=7lUD,Z7UyH`$]a;16Y!AQg5w.)]3:$?NU!NkVx(vHvVf2+Ix~O');
define('SECURE_AUTH_SALT', 'b~}FH+s~Sk3x!s2%C_/E7IshvLmiZb<L0Yuv 2P@g+km~o{ZtulYWlXMc<#u_}P{');
define('LOGGED_IN_SALT',   'H|q.]v51b)#)HO9B]5G {ar9zq|pLw^E-v4*HAmg+@CgZV[N1-|^3$O8 zfrQ@+o');
define('NONCE_SALT',       '1c;2ubs>3lD9}V&Q}.S|@,D6 rBz]PSN?PT*#QqB%x#+p=Mxm{A#`ok?qd17O6ll');

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
