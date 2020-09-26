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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'KR-@P`Ubb2e0|>Oa8yom562?f2:Khuz(g%9XDyOOw8quYcOV!_Vt}<>dausUwA:P' );
define( 'SECURE_AUTH_KEY',  'u8iG<:)-4>bgW3nT<X[R;GuhUiOu8kHnyu`]Cu)$1)/?~7_^Q4k%Gfjh#:ENcH9S' );
define( 'LOGGED_IN_KEY',    '4)%9SS%Vb~>]/bvNM4XkB|!rn,pvpS^YSbBU40NE)fIqS({@8ry}Vsk_kdYp5WCn' );
define( 'NONCE_KEY',        '?443(Eoce9{6/vc^y@k??mx!^syz3*t+(vwYFA!.Co,z;bCYgZ)3u-ke..@$0hRo' );
define( 'AUTH_SALT',        'f,/@ORX@Zfe$2?j,`!|jS6;h$lr_0F8P8mEKh%U@/~w[vfP|6ChyYUIDnBSupppv' );
define( 'SECURE_AUTH_SALT', ' 4$fhDp~Df~Nw}ry_v6gyg7 /:v@@F]9DFjsO~<*YVxT]wx0XT?VLrxFbb2q|z*(' );
define( 'LOGGED_IN_SALT',   'OjO_q@1^<}1)Q`O[fboj;-n^Pn2bLs;$7?KmMLqP+h)n?V$%wF0 sC@Eu}-%koYh' );
define( 'NONCE_SALT',       'gj{0oiF7|{&-w[biTx5k 7OsL_e)J@ECNGN<OkY]#z-s5!*V#djQ20vp_jU34W7j' );

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
