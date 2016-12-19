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
define('AUTH_KEY',         't^o!3YVz=cOm26*b1.C}#_o=|g &Ebg=#i&`oh*#jqpP`n~#G=VqEc;.NYbYYyMx');
define('SECURE_AUTH_KEY',  'R@ju~ c,n:w][SxK]u?mG?y}>x7PMeGW>N@#2P+nwB[N>V{!?44t%ZT<)3:+*&#z');
define('LOGGED_IN_KEY',    'q650KQKbvIjvw-B4yC$G*DWsFD3Av2:2zs:;4Rm{/_S-cR0uQ(`slxiy@+lZZ66<');
define('NONCE_KEY',        'R8n-47w*lb{QO;n(}1TnJa_%j2U7KT+8h^ruhcV!A#~7#!S]b5yahjWeL9fQf43W');
define('AUTH_SALT',        '3X.~@!(zgDSYjp8JMZJ(htVG+o+M60sHi*.>lZvO ~m28fD|fD}6y-``WozlzBKr');
define('SECURE_AUTH_SALT', '>gmsC0s_fgg,in]~reG?S07=uFK$ALm.;z{N?q3nP4UZm6Lz>jIy?GJE 4+q5`KM');
define('LOGGED_IN_SALT',   'S[fC6gcGl9A=Y%W5*S}8B:MEx0idQ>U;hUUv7)-t(OI)aeg5N7Bpi<vkuv{g9d7D');
define('NONCE_SALT',       ';8cT:a`,bo5AYg$-e][7.)XYQt5H7,Zs(u4IP7(c0u2~Lln~BFywg m-IR{lTb`x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_summer';

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
