<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'smartcity');

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
define('AUTH_KEY',         '{uoI:|kBjKCjh;?m3Dqd)+TwG@{RpPp0H=ETwoX{Gufu*|m.4fg1i{=$8{MDPU#G');
define('SECURE_AUTH_KEY',  '+)Vyd_EhD=qQ;neR$iF;J@|t*<`.{%F-Z]!u1U=,B5.Z|hxQ|}+4*zm,6l@:fy+[');
define('LOGGED_IN_KEY',    'B[l[<QJV+yBd[boAkow[#8`mIx]?&Z3#?y&iZ[b&eQgms!`Y<bql5w<nArb3i_q*');
define('NONCE_KEY',        '0D0B#nO$/!|BY=1l(-q+KL,a|;AMuF<)lbrtCP4h`Q[e%1k+7T|p^O[V8|J,Peam');
define('AUTH_SALT',        'S,8 ,sOhy&{6u2.i|Py0@4. _5O:M67Mp+Vm}Q>uL  LpGglROy3,]^:N0=tH8;f');
define('SECURE_AUTH_SALT', 'e6lR(e5pc,-X6Q[FBz?~b%=>[hd~oNN9*StF+in#QX|l|_>_c=]e^jeL,WnDs;H?');
define('LOGGED_IN_SALT',   'l0<xbw|A&Y]FAVm9}E4vHs,|R~+t7P4oDczxB8J_~c-O2j{w3G-.6X.fQXlX_>G;');
define('NONCE_SALT',       '~OuWo7C|2K]mcwQb_|`%XaR[#x)ysG#Q9VBzQ%!z8|=^v;{/wvo:F!JBu.B6uelQ');

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

/** added by minming_avada to meet the avada theme requirement: should before settings **/
define( 'WP_MEMORY_LIMIT', '256M' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
