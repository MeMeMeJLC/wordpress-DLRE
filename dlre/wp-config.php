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
define('DB_NAME', 'timbaker_dlre');

/** MySQL database username */
define('DB_USER', 'WordPress');

/** MySQL database password */
define('DB_PASSWORD', 'V2NVqdI8eSCdYTP8');

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
define('AUTH_KEY',         '((*YZl,cls_GVd#`=5fl1a[@j{-cdSCezw3JRYQeeT6hm?dI$-bL7}*sYf`;4mog');
define('SECURE_AUTH_KEY',  's8>YOC$^R$Z;fh8-[zhADVCDmo},.4y*3lvp<R]>!!^dW5MU5M4]PA7$8R?3QytZ');
define('LOGGED_IN_KEY',    'Dh&-_OBKxajI+0vRXGRW*(cV%iSzuBG1A1q@Lqe.%EPP2mW)c<>zP7TwW&Lv6!X[');
define('NONCE_KEY',        '@3-tBYx[SJ6dudEJ4YaMM^4.J!2xB`sjqbYYi.t2mI$eRC+|TGv2C9p#ou2 Gxpl');
define('AUTH_SALT',        'bITjlE.ZBReL+}B!C2`KHw+}X2GOTdXd~R|f*v:MkEY.Ndy8Ujo#s?:$0s~![gz{');
define('SECURE_AUTH_SALT', 'o|1>a^Q~S42ACdVss<l @hI;k>P`Nfy`acxGB!D1lnH4h?<3n+73w1T tsc_{cKo');
define('LOGGED_IN_SALT',   'zP@U^Kdjo~d^Uk319|H iozafd#d3rOYF/GRSP,Z%VS#(S$(QGBvO+fi+,l|)hS*');
define('NONCE_SALT',       'wBq2]jb<F<k:$L!p+})jmcTpo8~1r8(X{P>+kM,I1g-YwQ#;V#XzUop+*Qq}Jt[^');

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
