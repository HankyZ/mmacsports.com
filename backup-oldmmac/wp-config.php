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
define('DB_NAME', 'wp_mmacsports_com');

/** MySQL database username */
define('DB_USER', 'mmacsports696703');

/** MySQL database password */
define('DB_PASSWORD', 'mmamma7777');

/** MySQL hostname */
define('DB_HOST', 'sql5c11b.megasqlservers.com');

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
define('AUTH_KEY',         'ASvi[C~#wMH(nGX( 1g_hK_mvELwm8q{6oSj/vt8EksN+s  ZJ.JUCgM. fK(T]1');
define('SECURE_AUTH_KEY',  'i^%O{%MhL=HtPlR~!:Kc0:B(dYz?K$7a@hPKDf33nly_P|h@mO?zFFlM SpRUa$ ');
define('LOGGED_IN_KEY',    'b{c_-jW5LK eK{Fg&Fv/pxq[A&. f.cT3YOyfRDOrQH~a.t/+i- fv& )G)p1h+=');
define('NONCE_KEY',        'Qy]{6(} ?eX)[}Q_sr&RJuYBPY!}VNOl#X3po0%+LJP/pAYD&P[5_&=W K*>Cty$');
define('AUTH_SALT',        '.XoyM%%vs8*y=s~n(]x8Am^LJ?:.WI|dq 2^tUb#5Sqc/00L6>ge5;rt2_LFKab;');
define('SECURE_AUTH_SALT', 'ljp%hWYLb>]x}-0_pPb$x@f6F+x@^Q!7Y{r}l!]T&>S#f!]SDEP2Y*e]1Xu8}F@x');
define('LOGGED_IN_SALT',   'nCFlqSk%B&]#~4ZM{giJ%]Ale^JFD$p#FUh3#:Y]l3VzC<IWEaX3yo=OZIiZ_Sn5');
define('NONCE_SALT',       '29F/]*Xr3QrqebvBjSW^eYSJ..nKM>=6yZNDI$+6c(kj]m{./RSnLCXe?.O{ND)c');

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
