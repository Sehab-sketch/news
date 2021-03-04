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
define('AUTH_KEY',         'PfsK/XR2wXwXR2553FCzD6pssf2+7zqDfocL/pQyaeKGs3Aw2WKpOGOpmt8c7yYGMWnYVRNSAMM8qiijO6c8qw==');
define('SECURE_AUTH_KEY',  'rIfIrmnIrEZZ0ksPSk3bkVAf6t3FmlNq8ZnUb3W24oCofBzLYpKKFxQVJnmvanhIaNS3/QS5rrOZqu3Tj7v9OQ==');
define('LOGGED_IN_KEY',    'NSGTTOdeHKuwN0HEIdFbMcrTSu04s2bCtbQPgMWYR5Ufik3hq7VZ+4T19Z6cCE2gEDSHhtoFXQgbU+7UAbcbqA==');
define('NONCE_KEY',        'acK1VA6Ymjyk+5McvkPvHjuh+TAMlmgaLAo9sKkxE6q6vlBu/Ct+IiR7goyI1rs/0WEoTXuHyfy9mzMOF+x+Rw==');
define('AUTH_SALT',        'FEx0+chpCQ76NytaONq3ULLTzI1tIsorwhu1YZVrOTDmWdpSzTm5891M2vHDI1uYrq1XW+HpEeeAkCiim3u1gQ==');
define('SECURE_AUTH_SALT', 'MzzmYlnkPMBpqfap3nHEwaubq4z9EUGKil8sNl1m7oWB7vyqL50hlePZ33I5McBocYNpk3/1Mm+fBbXrsxbj9w==');
define('LOGGED_IN_SALT',   'Puqne312oR78QnTOyI7ooPQXWA8s0BsFcY0dpvSUWLNtAn2eU3Dit6XwLkz6SgQeywYED1PL6A7MaEACeG8ZZw==');
define('NONCE_SALT',       'p9qi2/jnI3v+KBhR0oMUN9Q4hMqdWAStuHcehT1fkHdMxwuwK2pxR9i3rXKsQd9m6Up8w4TavlHwOhqaSPqKuQ==');

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
