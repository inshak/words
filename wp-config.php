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
define( 'DB_NAME', 'words' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'W6;U8N,[9~5&?+d#nPmoYK0Wkt#)q5&3+X@` 6& !{o=yw`e&Nj_12/i,>2x|-lU' );
define( 'SECURE_AUTH_KEY',  'C]?rm0Bt|%z4Q-ZMT)?M|el/*,wo8e,- t:m3n@33P9@3I:f|vxj<=;9+aIt ^qs' );
define( 'LOGGED_IN_KEY',    '),Zeh~)e?;4&WIiG$Ltg*&D{v%* <UTZJ@M]}AL_mmYTCtK7,[>zF((hB-eKXa2,' );
define( 'NONCE_KEY',        'ap4D=]v1/p1YMCwSU%>}_U#{9z x`&m5OT;L#Ua(7Y4$ixblp5,f*7)0/T};}=uq' );
define( 'AUTH_SALT',        'd7P>BTf~G}qCxG,K.Bp?z$MIt=EBLLO5U szM=eY2Bd694=nc:o}%,l0Ns@1Zo=Y' );
define( 'SECURE_AUTH_SALT', 'sEN9.,77uD74o2o-hR=3.<p%/cd57/QJ!7B|m#[B=(` ~ui+0W0#r=T4q5n0K9;V' );
define( 'LOGGED_IN_SALT',   '~%DF1zLX)J{}Lk-F^Em8? ?A}<)!C#uo1F7$,>9n*{&7wz~i}^Y[n^J;N:UTm Ae' );
define( 'NONCE_SALT',       'ilqh975riZEm0_|OK75c..^D6RoF%*Rd0F5%VnjaH||Bv8QN#r`G@9d]FUbiPWo{' );

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
