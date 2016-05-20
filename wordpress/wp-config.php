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
define('DB_NAME', 'pacira_corp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'omHT/97I{aC9PSIH_*{u]_:/($2b(0d[uAMHBAwOD75{S}%SJwOY%s=%,B}4yQeH');
define('SECURE_AUTH_KEY',  'ajCHp7%%P!7:P?TjjZ99X)}~#Z;H%:{$@Qf;&7po^r(jr$/bmsuoZaMd5{X?UQ>w');
define('LOGGED_IN_KEY',    '=)#t4rv~AXrA2cA&x-FQC`T%a8=`yUG2j@BcEs|RsOh?!iTl#>__A)d;C78JZhRU');
define('NONCE_KEY',        'U3N}+bXoU`!??`a$=I{K<OeX`za99]Mj&, rdC(dnBFDTt`/jt0LTU!*W`8ts @V');
define('AUTH_SALT',        '_N,Aq1]vTo`~fS,:1R.Cz<BhMAutxGyG2E^(E+]pGGajZup~,OLBv<]<8]rc;qd9');
define('SECURE_AUTH_SALT', 'E):ZVvr.cLZ* @B%`l.fRJ~hOQ>/.!>~v<(dI^&j[1kt`:](IVfQ0c,J{ms=Zc<5');
define('LOGGED_IN_SALT',   ' Ht}WC8rMc]N ?<}b)cSfXYF9w/ILss]5=dFho  N=I@Xfn@gy$^e!BZB^s?aUbb');
define('NONCE_SALT',       '` {fX*tkqnDw KD@6n:7@tIhz+H:|8QA?x0E5?-dHx(7Mg8G@v,77$9jW36A/7qL');

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
