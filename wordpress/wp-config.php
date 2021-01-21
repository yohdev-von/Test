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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name');

/** MySQL database username */
define( 'DB_USER', 'database_user');

/** MySQL database password */
define( 'DB_PASSWORD', 'database_user_password');

/** MySQL hostname */
define( 'DB_HOST', 'CLOUDSQL_IP');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '59cfa78f68d9d8d43e68db660949367896b5022f');
define( 'SECURE_AUTH_KEY',  '4f8c4592754ac01f1f646abea5d39d0c1f46ad46');
define( 'LOGGED_IN_KEY',    'c80fded43d9ff5ce1ef5e1191d957f40a4d499a2');
define( 'NONCE_KEY',        'b0a683ade0ef967babd996d37ea2aa85f8178d16');
define( 'AUTH_SALT',        'b30898d583a2d24a0ea6c48a56c5e7d585134636');
define( 'SECURE_AUTH_SALT', 'a5b0ec5f85dad9e50efd53b47ef00da0832195bb');
define( 'LOGGED_IN_SALT',   'a65badb523d1474c3b5c05d694e9f9713434bc61');
define( 'NONCE_SALT',       '2af569fa68f4da06df2afa8391f13cf5d365bce1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
