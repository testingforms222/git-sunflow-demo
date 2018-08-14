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
define('DB_NAME', 'sunflowlin');

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
define('AUTH_KEY',         'FUEvn14I/b#oR2Zu)!s]6R{*X}@L?$ED,OO;kV;g1<:Zj $~MEssa;Ja0Y*J$*qD');
define('SECURE_AUTH_KEY',  'dxW>|J~ E il%ef0mna;n%fCsqi`0!n8JxJgYk!Baw$G~3~^]PWgKOX1nTPsE|2/');
define('LOGGED_IN_KEY',    'w{tYyx Hz0u%3?>tmo%|Ihnh{^v`SRNc$:j^*nAX7gCh#%U2x!V5*}Pll_}>5Zeu');
define('NONCE_KEY',        'W5~tqXjC.$&[:uW3QsCe),DF{{7``?u63icG Qui[)jj)L*t?]yY@:|F2KwJ= CP');
define('AUTH_SALT',        'd6,taC,qHzqk)m)2!Hng Y~.X<f,*}{~=vc~t2&4g9WB=K<I|?llhe]Sf#TKjLbq');
define('SECURE_AUTH_SALT', 'X.dZDO1|]hH e&){BvY @eGzP>ARP^CbRKVYlY<jjZ}WH`BD#Y9;Cw_{xk(hMz0}');
define('LOGGED_IN_SALT',   ')IUpHgk!Krk|?)6G*%LFVCiEk.&]</+3#M0l0n~-30{1Y%~%%>^Tg,Q(-2b@KnP?');
define('NONCE_SALT',       '^{l/X^:Vcdu==tlJIl|E.X,Ca2|8t~RYZKYcOZ!Z=sAqd>2?mjutx<Bn(Y^O5FfW');

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
define('WP_DEBUG', false);
define('WP_DEBUG', false);
define('WP_DEBUG', false);
define('WP_DEBUG', false);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
