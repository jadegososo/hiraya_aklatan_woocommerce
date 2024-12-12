<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpcustom' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C5SyM4U`q& 9861B._z0~ajpaCx@V>mi^?Se+;hL&5O;Z)ldf,Q86YE-}#?-~a7`' );
define( 'SECURE_AUTH_KEY',  'lI_ :s3rE{l#E1cW5fSRVOYu&=b|jC&ornx3]aeBmf&h2J50AwcN-UyEKY6o0i[P' );
define( 'LOGGED_IN_KEY',    'BlE}u3Cz+vxo^35fG`z&DC{IJiQyMNQ# l/!-O@Kp/Tw:g*0{@+}s*ed91A9cp{Z' );
define( 'NONCE_KEY',        'ntJtVBn9lk+Hwo_)SYTr| RY-ahWl`Yx7YBc^DKl+QxPX]/XN?ghD02mgmm|jX>?' );
define( 'AUTH_SALT',        '.8g)PKPev[>aS$@$ i_m&%shZu%.H{S~{#8cUw([X ,#TXG<R~|zd+e#h%/oz&N{' );
define( 'SECURE_AUTH_SALT', 'T`:Y/bT?K4HEN!,$?P B{Sua_iF0W=hT(_yZRPceQ7ySQ_.!?!g{o wRP<u/gbmo' );
define( 'LOGGED_IN_SALT',   'n?;sK|f=C][&XWH!vM,+arn$}*@g7!}k>~Uo4xX_O.~T{!![Mg<t|3_;{n+s[R9C' );
define( 'NONCE_SALT',       'P5o7B`6$Ope9Rq6!@9w{&HS@f}W]Qz0Q}po/U6vXl e=6npO;vwmU, ~nX[vE04^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
