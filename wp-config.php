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
define('DB_NAME', 'kowa');

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
define('AUTH_KEY',         'GkHVF-x6kS#>3@L+9`A,H}4j@fTVf&lm`pbTL8a:pZ~h%tcl3Uo`j*+l8*+Sysmz');
define('SECURE_AUTH_KEY',  'I]) :J*#^fX<j(7nGk}9siFnISO,Z%(c|7#An-mn/I7qR?:hsr+pu=Ib[%FIV0My');
define('LOGGED_IN_KEY',    'D3wJ<y2Dv-i7=G[63f|I5-TiPPZ!f$byW%_-vwBx4D>~59rr+#~^+1^/FouGl<4r');
define('NONCE_KEY',        '(Qc$tNrsgW-~gDuU7JA1R;9Tyy^E%WCr*!(MJ6e1@ZB|1frli+/1wSe<X@vY9T`0');
define('AUTH_SALT',        'HdtDCR$DKUo$ey(wOu^7bo4xRbpnD=.(1HL<@4C{n*=KJjCU,QvE0K^XN-Hw7=+o');
define('SECURE_AUTH_SALT', '}.u~RlZW:b>=T!50yMBe#sZ{s,umif&Jmf%go(R.X;-^^Q-OsR3Bf!v<[;?&$C]@');
define('LOGGED_IN_SALT',   ';h_!@>Z*Jjqr3d@dz06dNoA/o?r`SmlwoDGZl-*pjUI~/h I|*qE5L@]Trs[LF,u');
define('NONCE_SALT',       'd41d9/m@Fn/szCWx?8AW;Ur:5c qeSC9%%h;chw?7mzdKQ:L4AryZbkd`+.E;EF5');

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
