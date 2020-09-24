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
define( 'DB_NAME', 'wordpress_myrecipebook' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'GD xDj4i{3FUr_uTSvB0Kk^Dpq,!8;4PoLeb#^nYsvrU8togygbj|TD?_;5SPN`D' );
define( 'SECURE_AUTH_KEY',  'j5cB4,:D4YB>YXoJ}dL-Sj!xgk/$a[cVyBeKL*YKhP-/E7L:[rMLLbU3kK}bXWJ^' );
define( 'LOGGED_IN_KEY',    ':a2Gv)(rdZJyT1^q<!_3LE5YKf}wzer8B7FevwXvRw_4#ee#N:Mk{=B%U,rboC.]' );
define( 'NONCE_KEY',        '#RN]VQh2Jx{<%McG>4,Rzk6@/QCM]UZU%eou=w6vYhz_fPW}35Zj9Zas79`Y= WH' );
define( 'AUTH_SALT',        'ZT+:4mM5kI@NvTVe3U7/T)IK <W.![NJS99whjsolFH![nqUtqwHH^:akd[+qk:X' );
define( 'SECURE_AUTH_SALT', ',`~,Ucdn#d9Zul  U.!WtlrucsRau/a%U7kAfq)u5J_Jc@hLl6fhWG4ib$KgZMW@' );
define( 'LOGGED_IN_SALT',   'IQ92DNThR5=De^.V]0ips1i1p8%DvG/cFY++YDh5F#$SjXthquMmWuKLoo;|v:`^' );
define( 'NONCE_SALT',       'PcXt<c|c2<PN8k#8xaa%n?YrFxO-BY^%* V]0,?;U{65U54<J)gv0zfqEIOdl-w[' );

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
