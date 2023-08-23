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
define( 'DB_NAME', 'db_diepanh' );

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
define( 'AUTH_KEY',         'RsTTj]],_=T_@06D3[TTN_=BmMG|M12;&bRnGmglSfD{G8M^qpI&8e^D:e)AO;7*' );
define( 'SECURE_AUTH_KEY',  'tpfv}.m/A1L8%2S4*Jj4a%}F_>z_6I->+7%{||{=5e`,?TH4Nn%fU,|S_qHj#$)#' );
define( 'LOGGED_IN_KEY',    'nEu74I*pN9iVoM?]mS37EPHekG^+cNZ`n6eR0H`nh4Y[G#@-F<~>QUsGsQQ,G/Iv' );
define( 'NONCE_KEY',        '8qa]+DCA_#`uiv!K;qX{$^(8m:_7{;0J7|HEVJkm9I_XRJ(4(K=8CG>z=Dvt?}fb' );
define( 'AUTH_SALT',        'Qz8i`=J0w}C;)(9L3(*C!D$G2XMo~kAxsq8KSI$<;y_ov},;#/>;:R 8[V%kij$]' );
define( 'SECURE_AUTH_SALT', 'xy|bEk&a jh7EfF7LzNp3?6e1}_PB(XXH%!@ ]r7`HS%3*G1H-1/Ua0<s*|%@<I^' );
define( 'LOGGED_IN_SALT',   '))yh+U}9nR}tm]8J:`_{g>!/sy^%?{mYm[;q1w[S4e;ceg?2vVD{#-drAJHLeJ7x' );
define( 'NONCE_SALT',       '~32~ONi_G~i]U5cwQx2U|<,6e-[tr^E=Y4Qq+[)p^>e3ATz H_ull1)Lf8eIs_iA' );

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
