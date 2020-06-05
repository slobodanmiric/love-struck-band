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
define('AUTH_KEY',         'w5nUtf2oEEHfXo56MQkMLsgsWADTXU4z3iapLAt2L3Np0vQqWbs0XHt67plh9LqJ/9z9EjpwAQRLaq5yrbec5Q==');
define('SECURE_AUTH_KEY',  'utOPbBx6aLQ4+6fXZ1wZYodUTuq7VjDb07Mk13zwnsY1cZWMD2PXYKsuU7LjqmtqkOcmk0Q+SCnRGryGN/qTnA==');
define('LOGGED_IN_KEY',    'dv8pNnvIUpl6vpEFQkYuRYN4aePQ7uK4RpqVb0Wrjm8FT3rv442rvHHzjIMePdZpAauHKtJtcOG7+57xfowQSA==');
define('NONCE_KEY',        'fY8zBu4TpluoU6auehWACU2DJb4Ie5coxial5+aZWtPFAWyRPyFqP02L0aSfSxZpUjfcFu6y38anFeTqnftunQ==');
define('AUTH_SALT',        'LYbw1Ox45QqWc1goc/7rKf7FXvpp01pVb9MG4RYww1kuTRH5qShPT6Y4zAZ3w5D4ogT/04mRCtp9rtbfqXWdew==');
define('SECURE_AUTH_SALT', 'GZfdOaXCe/yEpQow3M8CRA/XCFs3h2F1wMdoravbc2EXksjSWq1OPLhPTbvxk21e8K4qgZgQctzzAolXx7MfoA==');
define('LOGGED_IN_SALT',   'PORbtV41XNcWI9BQmTOTEAfYdEdpRdSrExQL4JJRm+wz1B4XmgI8AeLE1SXxB6Fyr5ETGHa6q3+opAKyzxWALg==');
define('NONCE_SALT',       'C8mSCEmPXV3PKBit+5qW5LfIV35L9Kh6FSND192zOWOl1uCfVgNWSJcsM+ODe8xnVCbiyP4ExKyWoUFJ3hDf7g==');

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
