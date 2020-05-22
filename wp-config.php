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
define( 'DB_NAME', 'wordpress_uprint_bd' );

/** MySQL database username */
define( 'DB_USER', 'admin_uprint' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bplmcfc10' );

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
define( 'AUTH_KEY',         '%<p86ionG[m[;U/3LJneUS},]v&vl,{9{oevN4*8Z5yV~!%w9Ed&B65GDze[SUa+' );
define( 'SECURE_AUTH_KEY',  ':5KN[X5YLij(=#}N5j?*2fawCQS_^GTe)VE+70++jq6ijg=A_O8M?!Ax(PVr4{C6' );
define( 'LOGGED_IN_KEY',    ',Y}v} {GRrEKGLD.8Blh%r},S^#6.s0PI`ogQ<Ty0*l[Dc1j&l7*,`9n,D}/~Em7' );
define( 'NONCE_KEY',        'iB o0^D5uPWQBFy_c@9mii_zYhrj g|z<{z{DLp+.I ~]A`6S9gH^=_crxqQ;:-Z' );
define( 'AUTH_SALT',        'r5]Oi.eta|B?7, H_D6e.VI:}5CO(SNMyY}mMqDHzo@C=C;*%0F+FTwuct{k$W+y' );
define( 'SECURE_AUTH_SALT', 'wL3CQx+J7S7BdglS3m7OH}_ KTUjl^sv?ZN9p&hzY7H6,JCv/v>`D$t7U6,pf3j6' );
define( 'LOGGED_IN_SALT',   'AhZotqf1G]?pN.eh6QSsAP^`L;l}hO;U`Px3H?>T:vh-,Erh{Rpl,e}cN{q<LZp~' );
define( 'NONCE_SALT',       'rJ=qKW4O<MK7$m~}Cj|#/c]Z%zG/iEXT^>Edi~L-/IFQr8;Q.Iq_Dq+VrIWc:eJq' );

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
