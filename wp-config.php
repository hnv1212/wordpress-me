<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'b15_36200990_phukiendt' );

/** Database username */
define( 'DB_USER', 'b15_36200990' );

/** Database password */
define( 'DB_PASSWORD', 'Palomino1!' );

/** Database hostname */
define( 'DB_HOST', 'sql111.byethost15.com' );

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
define( 'AUTH_KEY',         '7KX?Ezqt` VfF:~?x&DP])&hs08MZsdNYB!I66Ey2dRxl[dTsW,:@q_b.3aAOC_|' );
define( 'SECURE_AUTH_KEY',  'tqd)@1Hc$/c%wFnc.?$lxWP&IFA+F&g/oHre5P-dZl3*yX!%6hbKS$Y(j):aPArX' );
define( 'LOGGED_IN_KEY',    '=yAVZY%;rG-v0F4Qo*KkB6W*K(6bBsOFN<CVZpyn=5K,UP);1WEre*Th4AdN3MIM' );
define( 'NONCE_KEY',        'Dih9:FvV`=~lBMSK7&U&%KK3bzg|y@jfVei0 B2A K86vDH)liCJ-rV{*cef0?[U' );
define( 'AUTH_SALT',        '5(pkDHY4@pVKNM;-0&-N3c*YKb}!2(|vDv=uEn<R<eIDb$$^,xytRXuRXkp+.}Z@' );
define( 'SECURE_AUTH_SALT', ']W%OX~716VCTZ10?-#>S3R=MMBe8Z~8h];mS:hP~[2aH)TZ CGxz5+,]Ss02G^VB' );
define( 'LOGGED_IN_SALT',   'B^=^o+z*/W_,Fp%>{b59jNNnE`>u..(`{E6nnVZhf,Zc7FK6v8pV O?`Z`Lb|0%(' );
define( 'NONCE_SALT',       ' 1;:w8x/hc~2<i,2$rX`CWX3Zpn;amAF *8x;FOW$x&]5u,<?uo;Hg0a;2|L(rJg' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
