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
define('DB_NAME', 'test_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'd22]-qy!/7_ms<{@>zWd?%+,Sly gcGiAkfrVjY/%GmW4u.4Vc155bw1h#)sF8kz');
define('SECURE_AUTH_KEY',  'yv4K6WAs@[A^4xV!vtNx@!E;7u9Hmi9Ar{SuL.ed)u<ha!=)I@-xF<7@usSjsY^w');
define('LOGGED_IN_KEY',    'h%qI$/jM4ZlP,S$g(cK]]7crwXNV{ZL:[@[T+DH_FeMpmirzO29>3YZFd?|qypil');
define('NONCE_KEY',        '&>Q0+)AXxLim91gE?an<-8Bz4#%EY|g$PsbJ>7|7T7>x*GLU?,M`:9|747:}vvq{');
define('AUTH_SALT',        '^3nOaKjnds:k$ywh q_sX:$JW=G.tw[a+<7q#Xq9b fH#UdQ-D/.1@R|M1vr7c{F');
define('SECURE_AUTH_SALT', '*jz}<$ns`a@a(-Fx7a.GWxe;V}fA8i-(jRLDslq^9wP!lq;AsU@xgb$n7$%qa!N[');
define('LOGGED_IN_SALT',   'Gt_ 5M7 yR/[IT_itpdY@tle=y_LKI{n0>g2o~5?`a*]!)i)k#s}$+ZYe0#3-!^j');
define('NONCE_SALT',       'd|!;{}>0u$0}C42ho{3[Ugs^KGmtiBHDwA(?Z^8}HG$7JHo8TIoWIldM>h*#q={s');

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
