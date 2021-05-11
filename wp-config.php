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
define( 'DB_NAME', 'myblog' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'zU[%8EO6,QcD#x#8hfkcevqRJM{q7gg+yABQA:?m_xE9{b-]W{t@u&9qopQyD{^_' );
define( 'SECURE_AUTH_KEY',  'L>;+L6L, }kE=;G*s;HsW>[Q[ODW[ #Ax=[i:UE9f9;wz?Z3*,rJI34A#nDmr:4;' );
define( 'LOGGED_IN_KEY',    '~-GsME #pctfQW2jKW8.BV/FiBB9(s60/0X/3Rh9gFF?oO4mxF`P<(0CG-XV+;ef' );
define( 'NONCE_KEY',        '#q<m)%DInN1Fg+iqsIq<5]S!4Ft8S}%+Ng0KF9^wJLN!&nl R@m|v0uV]I({XKaP' );
define( 'AUTH_SALT',        'e}P@_3<YaKLcar5A0wi:s[MP*q&.^h:vB*a93|jAgYD4)v%LaD{EkAIsTdhsPA[+' );
define( 'SECURE_AUTH_SALT', 'jye~COM4/>#_!/d#(!|bBPfamuixR7J%o!;9Brs,u<Tq&7zf=YW$kM>l;Q}tXSc^' );
define( 'LOGGED_IN_SALT',   'xa|Otst#G`&C;}=oi,I+GRz?#rvsFS$VCllp;796i{%<i.;z Sg&T1:SrR)APJ5g' );
define( 'NONCE_SALT',       'RFn+1?QqF8Mf=&0o={U#1K6X7u *mGWGd;0r7hZ[u~Kamy!^X!@OfB]#!OY22(^A' );

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
