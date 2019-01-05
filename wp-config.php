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
define('DB_NAME', 'stezhka_bg');

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
define('AUTH_KEY',         'qQ:aihu3r!C|R`mUB7u <zVB[ym$#zm!KvB^-p<sj=w4QNSUsFpVN>=X[CXYi/_)');
define('SECURE_AUTH_KEY',  ' 3Jpg2,_5k|;w#kBpV.{(1?|6(O$bA*C{K&4:0~^oYJi.,<TsYpXN_N130>Xd^,?');
define('LOGGED_IN_KEY',    '^SFk?|{e;;VL#:rEr=gG7vl}+hpOxS_LRljPWK~Q1}c7F;~vH7+pY-wmm&#Kc<(]');
define('NONCE_KEY',        'N5<38Wl>s QnPRg~IXSdy|e~TXZd)c2~AW$8D`m{4,_S$Abg=.4@L9_!8?zKbt~N');
define('AUTH_SALT',        'mC;a.[_1b{%oGFRB]u{mE_UM#eN!4E{G`9PU4lMy[w4WJ:#K 9L9`gMKWsy`q0kt');
define('SECURE_AUTH_SALT', 'Ofm]qf>Yf#>nKB5!ZNrI_mJ=|`.Z|2#m~(-BRa{3v&M7N;;l:qxQ(4++PwfJ!G;}');
define('LOGGED_IN_SALT',   '2%,-g~~o$R%{:]fVxBxW7IU%l6V7%EIIx$%7NKj|NM)kJJklKD3(P#NAlp)&a_MD');
define('NONCE_SALT',       'id[tYn0/?%k!;d=D(%v4/$ Ed+IpeY~J.o)XH2Kns2Jri?_ct=__gw8 GN?#(]|?');

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
