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
define('DB_NAME', 'sage_theme');

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
define('AUTH_KEY',         'b2}x7A= D]8O0}G!~~~LxE+)1A@.3lq5Z|{Cj-{ OfzZeK5e^>!k3@%SFz=q,avQ');
define('SECURE_AUTH_KEY',  'R_Ph9^Xn[%_iB#Uo6 (I^!fYHvJ|R~AByQ`O FT`|t7B0hDbfuvGsYfYBZ^$wo-l');
define('LOGGED_IN_KEY',    'I)a&d NkfF* m9Ezk[5;T/&g`-x<O*R|e/pK1)SIH?%Ce3p,uB&wd %7dMeVz1$~');
define('NONCE_KEY',        'uS03|y}:o7j~u[+$+1U5cbzEh>F~j&iOI.<.L>iAm<{ygHXv_{Z##*`zhDKq&hJ(');
define('AUTH_SALT',        '(W@AnL(R0F^ga>7ye3qN_lvPxv#:fNXu5|]^1sd3>D<cD<I-YDn&{Z[d-?&{Q4mX');
define('SECURE_AUTH_SALT', '0wuN?K!x~s5,~-0gO7ZPjk5}3nDnRm^fi{#-$:42EJ;<*j:8/UU8?~ZXU1:D<FvP');
define('LOGGED_IN_SALT',   'DtnIMn,9&Rqd{bW;b3(olJm67T4uBj`@N~e5kYUjd~GMwl]ZT>$R_-Y0<NB4-jZ/');
define('NONCE_SALT',       ':(tQ/e@54;KWpg5&[s?l.vDY]O6>70Qbr{~r*Kp|Qq=O&K6d20 C#C|A%[uaoBA{');

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
