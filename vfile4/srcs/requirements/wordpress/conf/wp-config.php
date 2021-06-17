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
define( 'DB_NAME', MYSQL_DATABASE );

/** MySQL database username */
define( 'DB_USER', MYSQL_USER );

/** MySQL database password */
define( 'DB_PASSWORD', MYSQL_PASSWORD );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb-service:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4wYGe61TNP~|z|$Yr1@u@;>PhC9_-,NAWtR-i-[V9l`?aX][UL`LK|`vgGF:1[t:');
define('SECURE_AUTH_KEY',  'EANnj$S,OQP:E-e(:G`}ciHIf?_ty+/tc:@JTK|[Q6-+9!= ACZ)GEM10=szt(SJ');
define('LOGGED_IN_KEY',    '>S,i7t76>s(NfTn@]J]%-%);u}7cB]@]rfXS/Me>b/=]<LmsD--2+}BDX j)%+K)');
define('NONCE_KEY',        ';Ew{VY{CC.U y6+C+*;9F#BhoD@i+5D$kZ8g&fBO`LGB%|CgsZ)+Y; XYJB@Y:M<');
define('AUTH_SALT',        '08%&s/g@?<p`Og~%i~$osgHJqt=^VxO$VGi+u`_,QmBRJ<= - )mP_|D3h&@ c^D');
define('SECURE_AUTH_SALT', 'M$hK+h3p+U(_s)M~P,@T9@e~?N!H(`_h1*=e $ZRlJ*ifNrFxS,BB-M[])E1_<E]');
define('LOGGED_IN_SALT',   'h)3YhxgZ^n|p8$(n(s|=y1~)^TZ>P8j^L4|&g#qEL,n/TA2yS&@qN:s6*#71g~O~');
define('NONCE_SALT',       'aMWF57{_ehLaQb/3hyo%P7{7Q@ZkX8H%aUlY{sy%kPa8{}#bDkrFoIkrk^Uz:-@4');
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
