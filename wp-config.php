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
define('DB_NAME', 'kmchild');

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
define('AUTH_KEY',         'fM} O8C_w)C;XI&/RzCNi! 3hgfqC/c?t;Yii+atCv?CE8wR2,pxeD @#&og#Y)a');
define('SECURE_AUTH_KEY',  'gg]d$bk=<VG@ o(ASEWXTu2OmV`bHs~,g%F`B!l4`VR4SJ:RPuY9cES34no*?{uD');
define('LOGGED_IN_KEY',    '{d.>U[@C;_A&~ 0JTw-/9n/Ye~9?m%Ilr!Kj$SlOY,A{I[v k.ku^ {@ijN}Prr+');
define('NONCE_KEY',        'dFV)SP`WU*:-&kp!I)ao%^eEu9y+{FT`:YM}7ZB*F+QtG ,,I8spJT%KreutRsQN');
define('AUTH_SALT',        'Eb`+ga?kPedw(MDzGP_fos__UJ2mg*$F_oJ[D *yF+>OQUgB4|!J:I/L-@Ni^S[i');
define('SECURE_AUTH_SALT', 'QhHE-^(!,m*0P_58zfd:98;hX{jO]K!Be5MuRQy=j77!;xH-*{0AA3cU7!_tS$pz');
define('LOGGED_IN_SALT',   'I.hS%ASi#_LSQ<x^Y*N3~QnE@m F`44yw%b[d^jBb)NI7X?)ROn*gmJOcl82u73e');
define('NONCE_SALT',       'LO^MiF>(yd)#7oR&$?+Ha%j]IXg%AB<%5s$gTp!%Y0=|B0YS+bb6J[69wgpd7<1y');

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
