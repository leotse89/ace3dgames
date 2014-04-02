<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ace3dgame');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'i.lBT;/Wpop`yKqAMd2SJ/u-VqBd-?S|eG[d|(5aOO-EpI}WM;@^ ~aTKHMle:E3');
define('SECURE_AUTH_KEY',  '|*k+.9k8%^kI!#OSg$4,=N5lX;F#:DWzwS&o|Go(9X}%+;?_Ybe1.g?iC+&ew dR');
define('LOGGED_IN_KEY',    'j?K`j)rP-0sXP0vW(4z7]D8,a95G*3QX!q|VgMb-i?,iLigq_6=lA-,/Zcb[,rVL');
define('NONCE_KEY',        '-G0Q>hJnl%q_=P1&:oEY5O$)QYB!M%-2WZ}i1/R%k>=0/]IxHhu7-{?k1Z/bh%/>');
define('AUTH_SALT',        ' Hx;K@9z]F%!0b74c]2HI9WX*j]v3K+D|V%8%1^R!.E#,U<^0EHp@gFyW|urdVEh');
define('SECURE_AUTH_SALT', 'tyLRU2IeRL:xqry?)5*S?^N%ejHV< /NY |Hl&/$yY1.g&&QI<kr~tzto_^=N#k4');
define('LOGGED_IN_SALT',   'O,,-g#4%la+V}Uud%Q-#v%FYDZEMq-04Hjmq.}M;+!yN[5w+cF^:{ug8-L-KX-F[');
define('NONCE_SALT',       'H?v|uRg<f9M(Iwe}z)w+je+cJL)j~!-jX&(/)nGe0@a1XLk37Odc RR+~@(`^Q[(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ace_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
