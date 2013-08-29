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
define('DB_NAME', 'thanhgio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'U*=S+(++.0Q{*rhBIH=L>F-&Y5r 8x6/^a|*0Pu&!BdwaVno-FsS)5l{44-PjR7R');
define('SECURE_AUTH_KEY',  'Hi#9g&=f2w9N|5_Zsjy-F4FZG?IgT:{[_<td/<u!5YngB,n(KG1OU(P@-^RoVWyL');
define('LOGGED_IN_KEY',    '`-H+2~Y>{i@G[UzLFmw>m#V^y2z(OtR0)PZKkZNaGY6o.IHE%Zw:nE-m%|3E4j>/');
define('NONCE_KEY',        'E)$Z|@0FO6?YWm 87>zuW0qCd}{<t,{pxHzkD.r.!<y9Y*UNT,O;;b4Hv  ik.a`');
define('AUTH_SALT',        'o~B_SAen&w.Ot.6L)wTUzJq@rhR0%]DY3(6qg9G(1MOfqDJI|]T|2$QBwN2x,e`*');
define('SECURE_AUTH_SALT', '|]%8z 8Y%^O-k0&{pdB8#6kFSD=X.v6&0QnI4%2T{ee@4cu$]?VFk7P1d?{s%j-(');
define('LOGGED_IN_SALT',   'K~!VU9<o67kk?d2~AZdhnRZAua,]]#1-_oH}V3o]7M+aNqfW>]8+pQ7QMXy/a-`L');
define('NONCE_SALT',       '-t~lewBzjtvl8mWvvp8y9=W-@uIHp4S@kk>9p$_Q|=)FC~yF|-[,TsRqV_X_a@<t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
