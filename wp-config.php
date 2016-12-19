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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

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
define('AUTH_KEY',         'Hwbo|/%Mcm*95|0b^WLoc&3IDX^=8U/xC>-9s^;i)/S_6_|pdvw|&YB+gGG]aUbA');
define('SECURE_AUTH_KEY',  '*Ii~o9|-Fl)vJ<$n<ZRllS>hkb.7f%-wt3<3 =cPW$m}ujB^!Ys:=8)X9goa^-+?');
define('LOGGED_IN_KEY',    '2&$4`p0jU+1*5g RqK94hpPdCh+[T`<eygwhd~n4{!E:_?~X*lHI<:3#!^ --:1x');
define('NONCE_KEY',        '|9II39E8c?VWf~nyu !x$$w6u_S|oQ?;Tlpd,t=oEE|`$-=%P:`*>P0]TS&,m^@$');
define('AUTH_SALT',        'F7nK2y,veK|on@miR:,%O1df|~|7+ Mq){#e>Ajk=<KWNkbet.&i@5pN&G8wn,{s');
define('SECURE_AUTH_SALT', 'NVKrGT}rAI:l20<)Z>-|XyNAAkYXl<#V(WG_*}{H/ER4,mzFa8aZAV_Yo@yN}i--');
define('LOGGED_IN_SALT',   'D([--3CYu6O<#zHxw37;f/~3xOap$WWP(#%AV&}fMsvRnRN-w+F%KQAq[vb|0S`}');
define('NONCE_SALT',       '0BUgKKrVHu|S 0Cl!J8cA.Q|rb/TNTu=#n-?Pt@I3>4vA]I}+WRU-Eg|r-sDMzDu');


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
