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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '38b7aaaa49f437cb5fc5c5cf3f896bb7487a1b05e2991eaf');

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
define('AUTH_KEY',         '+H<N;-!MPuVs;X-A+a%=|-^T8ZZ+m!DD)1?^>0Gvz!!{oov i<g]oqHO%zO9E{Wo');
define('SECURE_AUTH_KEY',  'K+9fck(s<Ku:mZ$B/{^wzGi:aETVT<TBY9n~CncV](SO2!~{{Uou?/]w+w 9aRK(');
define('LOGGED_IN_KEY',    'Uh-W6sTO;Db,;mnUN1]KgFI`p!V>aF>:E?eR>c5;Y}a6^[nSd_S%nH*~ps7Et`W|');
define('NONCE_KEY',        'i0x;#JLx_Is00+B{Sv{[~J)j1}oplmEI,AgRFG$I<7J|IOhkKi#1|+]:J#YOc?gC');
define('AUTH_SALT',        'Yy5DFN,X;3g=wf~`^JrjHsBs[V!8w+*P(dl%+|^UG]OF!4-R2~Q4CZsL]MPdvXW/');
define('SECURE_AUTH_SALT', 'jhone0,n=kKW80Q5{0WiX[,M2#?8@L<=}mm#*gPE?j?ag_#>I*Rb2lg?J*xfo:|e');
define('LOGGED_IN_SALT',   'KrPr@p$ZYK8C[E@]i#`FdW0}Sqy~Jbw.h2k=;/IgozA)u0/Fong8k Egz3flhjB8');
define('NONCE_SALT',       '5Q%%Lf`Dvd~q5v-k @MW.9NyQn)j^MZ`%7i^1{?p8k,4E51E P!l<j?~XKTP5bY6');

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
