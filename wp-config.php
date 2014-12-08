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
define('DB_NAME', 'eating-house');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '6oc~!5]l^FJ^sSlZ1Rayb=SA.t+24-+ZyUG?B|Vh1(PDEh|so|O+K|B&ll1:3}yW');
define('SECURE_AUTH_KEY',  '5~P^|tK/6..hw49Idn<-Z$0ev`D/+-F1rlrdnGbPj+;>oUHOizf#l-**9e95ljsL');
define('LOGGED_IN_KEY',    'VVu2suV.tt|6SphWn%S;+*UrY|NH+-`91X>SEn0>~p<n3e20+{sIrLm)58|l,V9=');
define('NONCE_KEY',        '#hzT5$/8CE|Ul)@|bv5t8W?2i8~w78~MOy{!(3Xz^zlt^Ae#z-+-H]Yk}(nq 1U>');
define('AUTH_SALT',        'V<VKU_y_{4`K&`2%evZ8Lqn^kO#43t&h)kJucTy7D3L|4+grwz$>DBkI;-J1&E<2');
define('SECURE_AUTH_SALT', 'yJZ=xP+cL]U&c`D)`ZVcAX6[>P,zx^T>[oPw%@NA1}Ix_:A:FbCg+O7F:Kjz+]^O');
define('LOGGED_IN_SALT',   'C-O0`steu=P;CcLPyYM8` 8z|_?aw(xk+-bZ<U]0ZuXn=Q7M7FQ451}caGt6F;ax');
define('NONCE_SALT',       ';&^ !!U|=_w;@G%V-ij*n-lT~dZ|8.<lv|!!@}j}wL[y55:$6u(reuQ@(dTCYr`W');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
