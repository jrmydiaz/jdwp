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
define( 'DB_NAME', 'cwtrial' );

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
define( 'AUTH_KEY',         'gOH=^[%?Ec0s#0?HLGC$(5_P#UV#L9_ON#0AO8JC*/9f^xDXLi,T-dWcRuA*v!=?' );
define( 'SECURE_AUTH_KEY',  'pV8RLudFm+p@U4_qfS{n~aky2 ]M-{(HMU.TG3OS-qrj]&m6hM  w.D;+^%H)lR^' );
define( 'LOGGED_IN_KEY',    'k~0%s*]BdzOQ9? ?5Ubh{jDXdc`e?!c=_WrLdj[j)aO=?Q,>@BS${<2Ju=]v{W[N' );
define( 'NONCE_KEY',        'Nlr{8JJVv9yED,*_M#>2VcL`.%Y+mnh3.V</2XvSpuJzF_Mg(vZ>hWV;_!$f^(>]' );
define( 'AUTH_SALT',        ' w.M2TX9&TlJaD5@(&tjPM+FzA `.qp>_0vq-N^{FX<YOeSpyc(X+cVHFPW{nc#v' );
define( 'SECURE_AUTH_SALT', 'c,rTvL{Ka|6sdVrM1qlm!.U @pUHtVnstHpD^ZoUZkbs(o]QKb/^iOQ~PRPB8(}&' );
define( 'LOGGED_IN_SALT',   '&f8L5dw,^y~U7AW.,$myd/s@=t[2nOlIp0mDa8 k-U-f{_M+=8Ok[Pr<LFOJA8 1' );
define( 'NONCE_SALT',       'WA)c>jvhD wg=37 qu?P8H3x_A2%@aK!X/TwpH>#%a2GFY9#T}D/NW 4qF0wz!O+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jd_';

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
