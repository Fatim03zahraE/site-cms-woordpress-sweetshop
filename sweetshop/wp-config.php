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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sweet_shop' );

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
define( 'AUTH_KEY',         '|Z=W?*+*Xx%aEL:`0dB&TcY+pa(k{N<6I2XW_H/<AtiRYCP~Eyavcfcb^QcLb?xo' );
define( 'SECURE_AUTH_KEY',  'w0RfHM#oh$h(I}@Oc)YyPX-NW!FkDt}Plf*3u0BR`R!KHnMCq^u_).-dEc:N&=U ' );
define( 'LOGGED_IN_KEY',    '|^EoTah$utmQ)*};P^H%#m*]T6oy9!o0D%;*H.M#M&H.b-*wNLbPaD4ooa=[RL=j' );
define( 'NONCE_KEY',        'q,WT8~R`+ O3!u_B.C IhM`2GO{-~ir:Sw/:?!z]tvoX.cEvr;QH]MTlO3p7&+gj' );
define( 'AUTH_SALT',        'd%Ly%Oq}h.<ExwHBgai **@&n3j_YEU#5Ai[s]GG3m_z17;~y$%#Pam3gm rrGR~' );
define( 'SECURE_AUTH_SALT', '<J;,+2@NHrMdj{,T30S{ Ku+ 6)[HM+B>s>}4wZ+jKzOq]cOf<>?K2sxsV#=iee^' );
define( 'LOGGED_IN_SALT',   'y+Y(n}f(}6_E;idY,D7[/R?J?+Ax9R8]na<oO=;ZL+UG#,y69Da|LDs9LsB/$*{X' );
define( 'NONCE_SALT',       '>i2Rbzwa25{``3Vy1OFr [ape@g0||rX fn>-e;2{h~wL_?QYQ]FAc9K{fD,,V>h' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
