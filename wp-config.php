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
define('DB_NAME', 'khoa');

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
define('AUTH_KEY',         'C9g$t$d{o$1Nltt!4oQ>a(u6_l,LpH9P&lXIT2R<#q?iZUMZ(s> nl/g6_U24pN{');
define('SECURE_AUTH_KEY',  '*a>c--Zchzy^8ot24jP/*#nKkh>|4<AlF$_R3ZmV[7_%yJG-Zkg`)uV4E{3.ycq7');
define('LOGGED_IN_KEY',    'x^0ezeYngpkqr{/GW<F6pvs6Uvk%BVH#VnkUvZZUi#$M5~f<bujnWUD=yo?N{#@d');
define('NONCE_KEY',        ',]R1g+,3~>b-!8^yG[MV~}HF3CC!)x+|2tu~##[ICd$68x}U#`x[ C$>=tFS2mnV');
define('AUTH_SALT',        'F 5x*a-bWiC+NWn(5*<knM(jc/ML:>UNPj8mbuFjU%~<(``f@|Pj2qJmQsMh7#7l');
define('SECURE_AUTH_SALT', 'n,zEa>yT^!wqB>QM-=PbhgACw!Uuj;|cOK8KZ#%g2,KXB3!]5i%9848EWFQ~z[jP');
define('LOGGED_IN_SALT',   '#Bx4gSPYxhl}4r6tJcjY^3(i>WJ50l.c=SK~{9HK0^m@jjb6P8Rj|/>HYLv6MZK!');
define('NONCE_SALT',       'A.;`)wpV~~?:9&;|jnC{&Rb*eS^|ME!ys+XqAu^/bDr$L~lMS9DA&?wvmX>CNcu)');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
