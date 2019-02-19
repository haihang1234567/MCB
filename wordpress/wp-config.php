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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'hai');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'sm0}/K+md;{r:k3f0jM`~@9+4<T 4$`{`,ky_*.|5qa4*LnNnAT++#gf)x(-]pw#');
define('SECURE_AUTH_KEY',  '__|~br03A*H(_*[%2km-f;<<&.@sRV-3&i(CsdFt`k*Mi(8E~jz7jV)e<FV6Vzh]');
define('LOGGED_IN_KEY',    'T!y.#&MOG)%y,>6-ffk@-CATt$CXp;iZWT=`[VL7{[e-1 }||zP~,#JZ%uT}lBK.');
define('NONCE_KEY',        '6l-bWX1Tys{oFm;<nOeS.Mh(uBFn<H<W8.CH;lT{2][SN/tWX1/;++g+l3W1N[8G');
define('AUTH_SALT',        '9Ck#5-f1wa,rE~sO|7+G]Xn3k:x?|{A$4u{t_[{-_[^bvc3Et;`.;q>eh+-Q=uZa');
define('SECURE_AUTH_SALT', 'FQ~,g0:[/5^OVgOm3aY&tmq|0{750)jsMLugN(*Mv&qY8m`_-gYABDsL)mW#iY+3');
define('LOGGED_IN_SALT',   'sy92oB0(dorEC}g1_CVp)zwV:_WC&X2D)G5Lo.Mn5yYu&#7D{N_%HdZ}XlMnVf{$');
define('NONCE_SALT',       'jKJVE+^<jW6FW3/1[|^*C*+!<D6vwQpv8`3h_cEW0+l~>O+TM+_~nC}gs|a/Z%h1');


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
