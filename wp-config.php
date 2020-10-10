<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pimpmyboard');

/** MySQL database username */
define('DB_USER', 'xzibit');

/** MySQL database password */
define('DB_PASSWORD', 'nSRPyvSGCqX7qpn7');

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
define('AUTH_KEY',         'HeMrtiD}B/*I_tw!IhH(p{dGsJ-G,+<*2L J:if-K,4qke-RIMS+)w7hHHh+On*9');
define('SECURE_AUTH_KEY',  '/oY$1qo.$$^(g<6,^b9c>L2>wWdae`>H8;?sdZx`LIBBncBA*HaS2H=7ZE1/u@bB');
define('LOGGED_IN_KEY',    '!PVt)5pI9%Q>H5NusiSfV^Sw6U>bSoNU8n-d6PpQD8~&MVK^PfA#h-/m;w?$5j|v');
define('NONCE_KEY',        'A,|d#tX%;?x[[}@5z{|Mp_o0+evyZWwd+KL1RLdSTbG.v?|q|,a6l9C7%ah4M?;j');
define('AUTH_SALT',        '?vNO)L4*JvnVB|T{jB&.#4?~h`$7Vv(o2j*J]?:[$5/Mg%kGgB|TR8]G L!(}^^q');
define('SECURE_AUTH_SALT', 'Pj3xMZBaas+]eg3-<P|&4|m=Ep|MjJB!tFVvMPbEzBEAl;D?b)CQ^-<O*o`4wxe-');
define('LOGGED_IN_SALT',   '?&dY(zN-+ij8+ww6tbPuh+Yn#j@1Gtqz u3-w#`C-Ot6#qcS`<jZ3juu0Qo8epe(');
define('NONCE_SALT',       'i96|)x+b+6A@ROW9Kr@{bV/B,)hq-,#rbk>i0/OkzU(Xu4Ern,Wc`v}`qQ^qL4.#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pmb_';

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
