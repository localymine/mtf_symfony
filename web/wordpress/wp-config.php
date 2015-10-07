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
define('DB_NAME', 'mtf');

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
define('AUTH_KEY',         '-/L>l5|zZGN-?$<[|$Rj%q+|c76n=2J%9+0o0>e[[-uO$^|J#EW&%qZ/1aib+rfI');
define('SECURE_AUTH_KEY',  '5FmtJY9eq*6mV~5HMPU6G)Vmb_u$,&lcLWKW:f9}+g839RHfZ-=Dc+dG;fNwxa;m');
define('LOGGED_IN_KEY',    't^Oa`jif^!8IQ|&l&FU.G~`B#t:3>-A.k>C=uZZ4Gzn0CLC&SSkB=~G(c*wA>bei');
define('NONCE_KEY',        'J+Lm;LxFG+)t53#Z+8C)gpy`Q~c/}rm4|-K|sRC{VrOz-!0i9LZAW&,60]zL*FQw');
define('AUTH_SALT',        '?W*Ibm`0DU4fjLzd!Bh~|WeEkvEiS-Vu{kZ_r_?NDt{kN~XKEjP?jP*+j6zZB(zx');
define('SECURE_AUTH_SALT', 'Oe ^.N}zhC4]_v,Yq+.2^p]0|?*to?4*|/sWd4+[6+SK[gNyG|~7t{K3~0^Vgmct');
define('LOGGED_IN_SALT',   'wRtX*Lgl39MYMFBYKa?C@~-u|*6>1IJwxEPr^rWm|ytn<y4TK.FGw,[`jhgI3[Aj');
define('NONCE_SALT',       'e Lp]6K+D=_v+u$@{/]pGI+dZ=J(_G|xr6X[=]<g`D=D(+X%keH6uw -AEW{2Iqp');

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
