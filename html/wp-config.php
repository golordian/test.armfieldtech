<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define('DB_PASSWORD', '755eb621a68b562088cb94148a9c6ed56966cfaca1605b65');

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
define('AUTH_KEY', 'o{pw3,LzR.NfPf_la7z(G])(w}v4(EgFAMJQc}?]0hu!r.L8uVZH9sCBNNI,t6v{');
define('SECURE_AUTH_KEY', 'o{pw3,LzR.NfPf_la7z(G])(w}v4(EgFAMJQc}?]0hu!r.L8uVZH9sCBNNI,t6v{');
define('LOGGED_IN_KEY', 'o{pw3,LzR.NfPf_la7z(G])(w}v4(EgFAMJQc}?]0hu!r.L8uVZH9sCBNNI,t6v{');
define('NONCE_KEY', 'o{pw3,LzR.NfPf_la7z(G])(w}v4(EgFAMJQc}?]0hu!r.L8uVZH9sCBNNI,t6v{');
define('AUTH_SALT', 'o{pw3,LzR.NfPf_la7z(G])(w}v4(EgFAMJQc}?]0hu!r.L8uVZH9sCBNNI,t6v{');
define('SECURE_AUTH_SALT', 'o{pw3,LzR.NfPf_la7z(G])(w}v4(EgFAMJQc}?]0hu!r.L8uVZH9sCBNNI,t6v{');
define('LOGGED_IN_SALT', 'o{pw3,LzR.NfPf_la7z(G])(w}v4(EgFAMJQc}?]0hu!r.L8uVZH9sCBNNI,t6v{');
define('NONCE_SALT', 'o{pw3,LzR.NfPf_la7z(G])(w}v4(EgFAMJQc}?]0hu!r.L8uVZH9sCBNNI,t6v{');
define( 'WP_CACHE_KEY_SALT', '9{=dhB#V(B,VO2e1dhi/M(:[Qgvi9F8~jOd{adIm(w Zck5y1V?*EskwsmFi:m@!' );

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
