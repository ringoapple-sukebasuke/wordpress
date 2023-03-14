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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'G`~dS^yDYf[WgGxuD$|Tp!8XaPZlUrs3O8I+#58,Ht^W#80f@N-s]koUq%:3Z2/2' );
define( 'SECURE_AUTH_KEY',  'Q8X?(9s)+fth$6?0V3RGQHE NDBHhDhdd&LB1Jg>o*JM`}V Nt*y9`/u_4OMaz+_' );
define( 'LOGGED_IN_KEY',    'P26%eS-NfA7pw+UeA9<q)zsRbpwE&]^L+o..Vc&I_Iv0r.#Po(>F(7Y;vEYuBu#L' );
define( 'NONCE_KEY',        '1$f# tsyGZ^eYFqQUL%dh#_u.>GO)9%}2q.8@#qBn,G.o$U]JFv3k:w=-;q4[DPy' );
define( 'AUTH_SALT',        '?Hk|=d:Yt9<rpzt$+n131rO(6m|Es}}[Y+3F_=x91(`|6aDEkI^0R=JO UB(iDA^' );
define( 'SECURE_AUTH_SALT', 'X2`w?gpMamu9`vCuwmeh6Cq@[r.%:wJfL9Vl?Bb+!`QO4a{iaq/q=u ,fuZoifg=' );
define( 'LOGGED_IN_SALT',   'nkNOvxF0y7v F=]C~rLfEJle)L5Td 9`7xA_yi/1*_w)nxAwA,(10M-3R##-%52T' );
define( 'NONCE_SALT',       'tyFGKWq8>0tG[q?JFxo!O>]KpZi4Mvx|n2d3S$9%TKzwD=I#^3KyS@v3 @Z))CS<' );

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
