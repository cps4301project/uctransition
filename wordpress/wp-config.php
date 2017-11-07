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
define('WP_CACHE', false); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '' ); //Added by WP-Cache Manager
define('DB_NAME', '2495462_admin');

/** MySQL database username */
define('DB_USER', '2495462_admin');

/** MySQL database password */
define('DB_PASSWORD', '2017softwareengineer');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

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
define('AUTH_KEY',         '9I5)lL$zyZGn9!djtJr%4-(9SmwG;=n<v4-l/VYA#kV/K:G0)i!BvM):DSwUj!C9');
define('SECURE_AUTH_KEY',  '/j`BrG-S;^O/x!B*FXBZ$4<@]+tf8m}l)?Mgd[m29K(<,6JmCbB,p2-f;2WLbU#/');
define('LOGGED_IN_KEY',    '*r/(wELN8!:?;xo[q2hAl_<XB_Gq98HVjLo9De%Op4K?>;Z>D|U!umVM3l3=%4qZ');
define('NONCE_KEY',        '_KD25?O80}]Yo}o)EoqLuqsQCMwO]KTK@#si2oi_Eiv.2r 6$d]Og>t,JmX[ akS');
define('AUTH_SALT',        '&Y0$rWH7-NL/W@l7pEOVN7s}O+QX*t8Ul-^)BiKvq;^NPDX{<fRC%:@UG>;L68i;');
define('SECURE_AUTH_SALT', 'yGVHK,hW.!ge6{M}cv[u6|w@X-f)C{K(iEdM7<euDJ=W wwDN+uA-/VNP4tEKK71');
define('LOGGED_IN_SALT',   'u:t}<PD-1P&2l4~Aq0!1XK,Vfqq-GsOjLsEVZGkb0fm2~h,oPGx%{5l6j]`~7JyR');
define('NONCE_SALT',       '7HY+:up]_=se~p>::X-0&B=J;hly9(zR<DQSJ,22e L0,7u#GM/D>l(j1qki6-?<');

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
