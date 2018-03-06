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
define('DB_NAME', 'wordpressDB');

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
define('AUTH_KEY',         'Hn#o@O}r&+<wIK=FrM=jseysNz:4nbsnamUg*eyKx_}ay<|^=;N0bm)!~Zqr,Q|z');
define('SECURE_AUTH_KEY',  '%R3%ev/`B:OI^MH)_4B&|n2%SMWL(e.TiFYXaPKU(]KplK{*S&lkpD8PT&%0NA`H');
define('LOGGED_IN_KEY',    'OcKV iY+Kv-.pt,w7_*)42&L*5A>F$/;b% ]h4>o 61?VAH:NeoNvc6Uj71$f*`{');
define('NONCE_KEY',        '=w)d%*FR,mio/~ICnD_DiHV+uDp?I18~b#=DkI8?A[13y)q7W03RDw5iK$#U6w*<');
define('AUTH_SALT',        '`&fb%(;4/zeZ3F(rN0TrL#]-q#l#C6-1k%xjoJE0P)4wQ[Lo|l#TlxC#I^$.A{~f');
define('SECURE_AUTH_SALT', ';,X`Ye@]Z*1ss|pP$QF}%)KZJ,=S[Q%s,B7<pA4U|l3SC%,aQn+q;(e-RMPApJ;h');
define('LOGGED_IN_SALT',   'f(jyBeRS*QN0|%>S@uVx#}W?&~T`>*:nhKjBD8q/H0Kmt^{Zdtvmt}-Ao&[&eE+[');
define('NONCE_SALT',       'OE3j&$gtOe/*~5w/x;e~642>@4kc|Cmi3SG|VF:hU~=*c#9S$tQeUJv=#Lr|4%Op');

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
