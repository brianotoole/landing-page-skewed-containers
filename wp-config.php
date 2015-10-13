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
define('DB_NAME', 'landing');

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
define('AUTH_KEY',         '2jCh,l-P@[5jmpDBS%{fF5b$24W+#~?ZQhzh:22^5g7jvpc*B|v!C0/$O:F-?enk');
define('SECURE_AUTH_KEY',  '6~mk7DTfa#%)x@z0 =^$MXqSE,Y[/fTG!dsgT}X^gC6Wq/q8^4sS*|m^L|p/-m+!');
define('LOGGED_IN_KEY',    'iLcFV  <wI z)J^T0E|i5h)KsNK[rH2lWjxA|In|wS=:(4`->v<pXo>>76NTWX&W');
define('NONCE_KEY',        '8.gQ}&L-^}|+l3Dy^NK{[`nCA?(8oB-f;GF2/ReZLH%|r:s,&@)SuXuGKAKYx H.');
define('AUTH_SALT',        '2GZ@o*kSOHcVoyqi+IMln>TCJJMHkAHJ+-s;v$m%.$:Zt?0vS*?Js>YQs|LV7?0U');
define('SECURE_AUTH_SALT', ':kT-Jq8YT3MheMB,hQ{2lx2WbJ2R|Mm+NMD] /EL}Y}{Z#_)F]EGx5+7Hn=3%Hs@');
define('LOGGED_IN_SALT',   '1sT4-j4J,7q2@F{5_g<P?o%qcH1{a3O{-R|RoXZVwgl!]M@-w~y]7l?+]*hpXN-i');
define('NONCE_SALT',       '5|biM-ml:F`gB2Gdv+g,!30Ye&$E/=/lB?1-}`HN4.gFG.Wo3?X9o*oG%k|O1kv3');

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
