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
define( 'DB_NAME', 'sage-mmi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'QKD8ADGYKw25ON6k3akzw4Vm2JuE8XhXyUKjiCpSR1nV6xeP9TD8BgiOV65oxlZj' );
define( 'SECURE_AUTH_KEY',  'yiJaU771bY5zED5RtdJHS4TyJWxy9l89VNlKUDIJotQagcJtNFqMIREErCDur4GL' );
define( 'LOGGED_IN_KEY',    'aDjrao8FPOHOHB5PWFk12tb6rlrdlTZP5Oa0f2BO4nzHrLNiHo8XxdkJG6o1w0zU' );
define( 'NONCE_KEY',        'tWSP50yHhKdCbBudWre006lxkak8Z9uNiVDonTzWCCVNxYXdajdDZHMhRPK8sBBj' );
define( 'AUTH_SALT',        'r8HrANJq9rpTbclKYJ4fF53yntDFD9FLYHQYaqqLaWyC4LsPjSb7ocEWlPhxQ6nM' );
define( 'SECURE_AUTH_SALT', 'ufC2xFr3s8dSQrqaWfPBWIDLAOip8gtJFoaztIG5DU6StnzXhOmNmbykIgQ4kCX3' );
define( 'LOGGED_IN_SALT',   'ynxAvyaELN2RwGvBUKCXdmfYMaXaCohGn6taN1Vn8RC8UZF6eKwtlarH5IqyO0wi' );
define( 'NONCE_SALT',       'JPOs42g7i6pegNwwGSBO6vdBF5JeVkLxIICPG4XaBfeFZFhGW5h4XB7vqUse3zE5' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
