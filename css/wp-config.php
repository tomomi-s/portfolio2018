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
define('DB_NAME', 'DB3352875');

/** MySQL database username */
define('DB_USER', 'U3352875');

/** MySQL database password */
define('DB_PASSWORD', 'oj6Cyf4qe2MJcbAjg');

/** MySQL hostname */
define('DB_HOST', 'rdbms.strato.de');

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
define('AUTH_KEY',         'wiH!Yq5d6CaNf4Ow*m@ST#uqhfmK(ubij@DsyK@UHBcdzs5YkP#1@MydlX2^nsZz');
define('SECURE_AUTH_KEY',  'jhWkHt2r20!ZqU!lqVe@twEK&uRN#FKwGbP#pRT&2CG7QGDnK%1WqQUKc6sv)3pw');
define('LOGGED_IN_KEY',    'O2jdq1)a1ZS2V@rHtQiw9LyLqJudiSLpf&n)FIcE%2WUmTX5G(V^Y&Omo8VU7X!f');
define('NONCE_KEY',        'M1GPtEnA4s*jw(Q)qhn(yJx1OmHZVMQuVG2fv7RXSVBZF72Lb@eTeWlJ1rkmAUls');
define('AUTH_SALT',        '(Ac*El^&3xzI9Qe&i)ZVINM(i1aMd6Kr7j5j(qxZeq#X(P#A@)ee@gW(Vzf1zcBn');
define('SECURE_AUTH_SALT', 'f#jFfHg6iaF4yiZ*J3kSqx%fIW(N1b8FGycVLOV1&)1uJNEb6zl0Di@@wvHqmoE7');
define('LOGGED_IN_SALT',   'hD(rJYJ#Zos8vVXk@PYBvY#@yTNfNZIkZxWQd4SLNMC2R5b%d77xsbCl^HAmXf%P');
define('NONCE_SALT',       'VZV)oNKd9cX%jFxHinKi!%1!nc7g(4n%TzZzjSPvcNd^yUd7SoVZsi3JpVsK5kFG');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

define( "WP_AUTO_UPDATE_CORE", minor );
