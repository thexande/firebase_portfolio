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
define('DB_NAME', 'thexande_wp_portfolio');

/** MySQL database username */
define('DB_USER', 'thexande_wp_user');

/** MySQL database password */
define('DB_PASSWORD', '68jDzhAQEwMeWraRxNRMhoLY');

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
define('AUTH_KEY',         '9<GH=#%qF>y&8)*_&t~=_g10]o-NINFF8B7`_G74At(WNy{Hy>b@-,OAbb,SbrI5');
define('SECURE_AUTH_KEY',  'g-[WFW}d_mY;@%YM3!|Kj^~$Oe6@_dUq$B-%u72x~=]qv|(ghM`uBDrBARo67j/W');
define('LOGGED_IN_KEY',    '.nd+q#G_ld`%bRG-?YT;,$lyap^@{/$+sA}onO63]L..|@[+PC}ya5~YyEyqJ}bV');
define('NONCE_KEY',        '}Oum9Sc=G/CbVE?9hSS9g~LdC-(KR`+e,<9GzV^K/+uM[ku_+6 In/Oy:[TRNk$,');
define('AUTH_SALT',        'NVyr;v&yt+;cCj9(%cLy=m[R5Jd8;|L/F-#cnWbgB*tUUtdwdT5}!|:yBi.C8J;Z');
define('SECURE_AUTH_SALT', '+Lo9k[ }:0uUW*[a/o7-Y=qu}hCH`:!x$p]>4P8k(idHC5p8KD3r5Ug5W7[S..@#');
define('LOGGED_IN_SALT',   'SF4^~(m!{[F]h;D1kXT}_BLa+8R((-4ae9yFj8A5~*]0Qs@83YB/n@u#p.sVEu3r');
define('NONCE_SALT',       'fi><a_aj8S##K+rV^Q+|o$n=gbm/f+`Izi3>~p.>P=A|-q*%I/2^!hFg3&XO0mP|');

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
