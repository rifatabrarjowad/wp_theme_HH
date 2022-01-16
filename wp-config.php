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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J/kg1+gyOfF/Ij71II08w6ouoya3XwSrXHmy6f5S/GcoGCF358ijqwS8Uh7ax4HCZQhJcnKPP6FOK2K8o0CKeA==');
define('SECURE_AUTH_KEY',  'JAjV3iQ9vZrkOBlknYjXt8r1lULQS+A8lbKES+YqrYJeLnl/O2O+Pi5VrsrMOaIwVLBdyAr9mYTrl7KJaPWpxQ==');
define('LOGGED_IN_KEY',    'kQOZuXBqbIP7YPwsFxUnb16hG3fFUY2vGbr8spBtvs1ThG2Bo6rqcpFjU9Rzwo+lNyjsv2tE9PXVeQQfenME6g==');
define('NONCE_KEY',        '2iR/DLboyqOohD6wzPvGuC0RiF3FuCjOC1kuxz3CVI6PAEgU15WQXJOk+kpI8Xc5Ty0gKLdrowxrau5HappzeA==');
define('AUTH_SALT',        'F81RcPgFhfkGj3/iIISy3x5BUxlu3hXlweBfqf1dtPBmyGp1UmLvq3BRqQNCDxFSK25/6scbpWiQFs3puaJQvA==');
define('SECURE_AUTH_SALT', 'WJWLxNTLCwOoMO0uT3BBw85rVtdrOGPwCEhdz0sawsIwYe5lpJFhLvKxBIc33R++kSRatZzRaYMaP5BxJoMk+w==');
define('LOGGED_IN_SALT',   'CEHU/6CVDafK75GNxOxXzpHcJBqoT5rDzQgRdD9RVQKhN4kMvjIQH8YqxaD4EJBt09/0tgSea9wE9706EH/1EA==');
define('NONCE_SALT',       'B5K9Qjg1zmCmViDyJ7tyhsiVlMp6X7bINVd9+c9CsKvJI7aP1/2O/3aWV2C8P4JbBxugZdfv7Qi2yWXBOtjMuQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
