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
define( 'DB_NAME', 'pagina_curso' );

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
define( 'AUTH_KEY',         'Z),QYr-X[(&iTCY:.J(=2CR{aL@FBR%m%FUWM~7G?,[x^AR.KO<vTAMIt?_Lex@/' );
define( 'SECURE_AUTH_KEY',  'u<W(`8NA@IKSc)Yv^QH6A8<@cbf|zD@D3qjfaW*W)9s_np9vH)PSq.yT4q[T@eiO' );
define( 'LOGGED_IN_KEY',    'mg,^gXDBNq~DV@S:FQWoyIA~DJg +HX)&?Kz>idT8?7b!j0KFT3F1N4x;`.X{5<c' );
define( 'NONCE_KEY',        'Z)lkU6]%9zCKOY[weYV,00%Zz ~flZaUVFrHT?ujljFPp6Ls<6BrM8~v&v&^tmJk' );
define( 'AUTH_SALT',        'h|P2fL&I!q$a{E).9fB`_io=6LOPGtC6-4 R/PKq?0{)=%~j9c>c)X4z94|tVhLH' );
define( 'SECURE_AUTH_SALT', '=(L|LZv)i.{L1^Xpg_m+oR_PN>LKhN&F,,=76y*%*6pjy`po-v`0Gi:i)8@?-o+)' );
define( 'LOGGED_IN_SALT',   'Dfo1YvJnXECw? FxJ%M^JN@nkoz9Fd05xS&}:V=Q_ad5mOaBQdt8H|*-io}P9veP' );
define( 'NONCE_SALT',       'B(J0aEN{fHyxPi=(749C{#H$:}w3y(Aa*zg3&#pX#MU%473{aEc|;Z~XvgJf&k9#' );

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
