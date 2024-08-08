<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'hyenacoz_wp61745' );

/** Database username */
define( 'DB_USER', 'hyenacoz_wp61745' );

/** Database password */
define( 'DB_PASSWORD', 'XS[7.p7C7V' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'wkhr4njlzeu9aegackhztmwy48fpieibgga1svkskbzcpff4vvxp2gzy3bdsrshp' );
define( 'SECURE_AUTH_KEY',  'jzxf8gt7naz0fsqfpt8zakzlk2fhpinerftffeulcwswslkqo4a1zdu2mubdipd6' );
define( 'LOGGED_IN_KEY',    '40jib2d3jh5ishdgbougl47fgueeldnyy9fozwsaww6afpv52zfzisompuiev330' );
define( 'NONCE_KEY',        'd74aqm23pn46wuk0xyjsqd3hwpgklgmxb24xzgqz20sntnmlcubjzwqy5dxeox2z' );
define( 'AUTH_SALT',        'hdkaugzgqgspmbh6hmhtpsfw0vnm0g42imaxa1x5h5xjkdh760vmtdtf01ebj1kt' );
define( 'SECURE_AUTH_SALT', '0hjxj4f4pdxd3oae1ajfrilmemu7qzzf6t4rqsrcultytjtf1uageushq3hn304s' );
define( 'LOGGED_IN_SALT',   '6w7dw6rw88gnd8z1pavdseaf6bgd2le8xwhzuvh4ktha6osjpr35ew33doi41bws' );
define( 'NONCE_SALT',       'm1p3hxha5fhvw4n42nvv3zrycga6lc2upvl8okxbknwk0sp4iwj8vhu4iwutedcf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpkz_';

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

define( 'WP_AUTO_UPDATE_CORE', 'minor' );

/* Add any custom values between this line and the "stop editing" line. */



define( 'DISABLE_WP_CRON', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
