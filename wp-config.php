<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp-growth');

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
define('AUTH_KEY',         'zX8R+)@5{y/I_q-afp19Gc+Q>!{4(oS%.S]tzIYc*t+0MoRQ:v?UI4,@N,fha+[^');
define('SECURE_AUTH_KEY',  'Kby:d k]++-_Y1xSB1+jW;O??T|P$)|lYtkg7+)/e7|zjK/C7)^Exp}.L`kGahRT');
define('LOGGED_IN_KEY',    '{(+`+)n)&R&}D&p;?];r&7r*lLW#Au+_HmZMjNa0Iz/8c_eq4|wQA3bNV07,1cy0');
define('NONCE_KEY',        '8jc]YgGYZ.%=c6.dnWe{/G 6tASc*}a>@VH~~OW^U8L/?M>AGn]vliA$Q&KR0jbS');
define('AUTH_SALT',        'l*#[d30p#;Mt2cJ.)];Yj@l#oik8_ZtY7IzA9>W/2-s)RvnU#*u?;g?xaw8NTd<2');
define('SECURE_AUTH_SALT', 'd!@pSX5&UOFii[Zx!K1#W2hP7:ztJ~1a@JPg`:&JcO|FZeL-z^Td+^S}@l;4lf+m');
define('LOGGED_IN_SALT',   '3-n5to<?6=Y?G+wo%1(1v_c +fR|<x!^jL)D^-d;[=0mSq Bk#6Tw6OE]OnJx!A{');
define('NONCE_SALT',       'sr$oF_q(:X|gy%OG@eyn@#c|.<{4CO.)k]Q|hMB}9s7G||0iBAC8-/BJR6lYY+3@');

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
