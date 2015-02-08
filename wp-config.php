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
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'bynectar_prodv2');

/** MySQL database username */
define('DB_USER', 'bynectar_admin');

/** MySQL database password */
define('DB_PASSWORD', 'bloom2011');

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
define('AUTH_KEY',         'qJ#Xq[D;9!s,>P5lH6,(n=b|Ir#r1p]?Fnzqu9I}Je2~g|]b8|urq!O$%F]qRp2R');
define('SECURE_AUTH_KEY',  '|8mOT2on`;/rz0W3COP==JG]!@to^r:N%x^,YrdZbJ86@GYFbL6vqQh~(-EA-|lM');
define('LOGGED_IN_KEY',    ')c5|.;9}RhBA(5*3+F:Y:t_l+9,- Xj5>:l~n[nWLKC9~,QA4-x* =-^7_fmzqP-');
define('NONCE_KEY',        'i|z{Fui:W1o(x$Z(S5LpW1hvpUvvn1[&(JS[b/n2?@Zk0:[W8c0`zuUWF/7OYp|V');
define('AUTH_SALT',        'N7JW~,z{G8Q?.r%8A$+^SA^+`^s.#|#-2> 3&hK<{i$RFgMPTxr])W6_021F$toz');
define('SECURE_AUTH_SALT', '+6<zsHW;}2}:QhITDUwzQS/cnFD*k8aX|KGbt-:xCSfKbnx=K9~NsCX<UmR>+^gq');
define('LOGGED_IN_SALT',   '_5{NHjE,,p1Y:-kx:X]afQmvd#oxomK-zu|U|[x1n]e`SDaG?:is43K|?p~`nm8t');
define('NONCE_SALT',       's-s>qtlU,$9ExoB7w-?c_+X7.GEPtM>Z|*GK3L@}8ou[${1T6q-QD:Ng8>n++GG-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bn_';

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

define('WP_SITEURL', 'http://www.bynectar.com');
