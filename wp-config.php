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
define( 'DB_NAME', 'forevision' );

/** MySQL database username */
define( 'DB_USER', 'masoodnoor' );

/** MySQL database password */
define( 'DB_PASSWORD', 'imfreelancer48' );

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
define( 'AUTH_KEY',         '0?36!q+-?wH*7w(f3upgJr=]m#f0(!QWy..k/Jvm9g+k3x%RwX2`b,`kJDC=)m10' );
define( 'SECURE_AUTH_KEY',  'klO.5cj(7|i%9KT3`DS(krpDRn16m%dk- H6TX%qEFx:B/sDS4JMCIZGokfJN|<O' );
define( 'LOGGED_IN_KEY',    'JngSSMg!U88+69fT;rRNT4:0WY#[W/9kh&G1Ssn4!6s57l~QR5:~RJvx(Cj9mu,1' );
define( 'NONCE_KEY',        'w6X|T4<U7r8X?a0SOAon|ZV6.RO.Bcdv!VgJWFWvb|%;Z]W^4/=<%C{yc.YpJb>M' );
define( 'AUTH_SALT',        'b`}:kuQs%)AliEDJK-(wlpR3/]k;P}Y2? DK`)su-pFB7e/^YS/^Kg;*ekgO_g2%' );
define( 'SECURE_AUTH_SALT', '>+!_CT@qw2LC$U0j9/%78un=,<R,v{8iNY@eB^.7FbqG5cC%g8 fB^KW6]0t5Lx}' );
define( 'LOGGED_IN_SALT',   'Q>hJrNm_G_EkC~3-P!S (w4>b.Uu<C1|-^:7#zx;1_h~U`R4)hv]X&](]wE|({/!' );
define( 'NONCE_SALT',       '}:vx#<)02dg%R@73g>Mrr$3loFt9-O{Z`idIV@X$Ukb[J^01=J}-USA$^5>Zf- l' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpforevision_';

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
