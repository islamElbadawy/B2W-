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
define('DB_NAME', 'bootstraptowordpress');

/** MySQL database username */
define('DB_USER', 'islam');

/** MySQL database password */
define('DB_PASSWORD', 'WEmGDuHE3Y6oI2yU');

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
define('AUTH_KEY',         '-q&ukq>^=~MX@|I{g}-I2*2S> /N~x7M%y@&+/bGaSm!a.TeUqX6Q)/`|_d`4N&C');
define('SECURE_AUTH_KEY',  'T#cQ]YMgPDA&l_~KpV)fL7OVG$+YBzWv}2$CX2(n_0=_wq&mg.+Jx)b VN`;Q6m.');
define('LOGGED_IN_KEY',    'Uq{HR)e35K*^-bzg{^%F9cH?4*auF4VQT;21%*eF(5dw!WG&~q|exL{BYG9bxC5a');
define('NONCE_KEY',        '2pI)f|.yg(/S<2:hKZledHGQ[||wZoCg+c$X+~2g#hkk|qKuJ*n8Uz{F#gwiEK!&');
define('AUTH_SALT',        '#g_q3+d{z_Krp#7>.:QO573>6kE!R&$9:%-%[fMw]8K!+!OD{BG-+~B!A78nz5$t');
define('SECURE_AUTH_SALT', 'l^O/rNGS(+6}$}l7}qje+!H,@>GB>+^=#evQ/uCQhey.Pm=:LERYkOvfxh @@T>{');
define('LOGGED_IN_SALT',   '#TTln O4-AMZDbg/9o<Ak.Lid+jVd=4N<f8Z)6AREOpIpm5]D&z@1GUIpL& $-1C');
define('NONCE_SALT',       'o=vWk8V/m0>jcCtcg9X=p?f:*4X_IWW#Z_nZK4R~6FrIA@!1NsO)|RUgxs|1OzTG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'is_';

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
