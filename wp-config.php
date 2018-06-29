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
if (file_exists(dirname(__FILE__) . '/local.php')) {
	//Local database setting
	define('DB_NAME', 'wordpress');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
}
else {
	//Live database setting
	define('DB_NAME', 'alex5278_universitydata');
	define('DB_USER', 'alex5278_wp598');
	define('DB_PASSWORD', 'L5L^a6RXRfC0');
	define('DB_HOST', 'localhost');

}



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
define('AUTH_KEY',         's2|4?uqbseQ$_)|]OEKHK41+sq|xqIQ[mA4pHVi@VRTmw_9YV-%bjb*y{6O4~H2n');
define('SECURE_AUTH_KEY',  '0]<<0=tQet:sF8NA{Du u(RnWUw#8O),!,J7b6TQ0`jID`hW_o.NxYJm>ok?S(,`');
define('LOGGED_IN_KEY',    '2_% [12x:07_-B8Ve~he{]26g*WSRk}T(qvH*p+B4T^V`-:1A6_SHQJsi(gA%V&i');
define('NONCE_KEY',        'oa!Oef!.e6gTYL}1}ez}/5HEZ7[8jg~DKNZrRS+yFIv^s:a@wrAc`k7qRI0tI-[H');
define('AUTH_SALT',        'Og)S_!O@P>]n|*b;;}q] /3=lP5}$ho*RqkQ!y/@[H[*e2h}CD8Nyjvc$}4gEt1 ');
define('SECURE_AUTH_SALT', 'Xd:^Cln897%qc$)xXEB^b#[{j=3p!xuq]je)?oYBdOG$~C9u+dV:UoHCm`PIzVUW');
define('LOGGED_IN_SALT',   'T_G#JS7L5BaOt{bKPo(yOc%jFYrveq +GRP&BI?6:gjlP` RNhTQ/7NOgp&i8-rZ');
define('NONCE_SALT',       '*F.()QGUr]9P|!~<xVqYiO=C9Q]uA?IqWP7fBK}p15CqK=r5!~NSz7~DR6V) |Nn');

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
