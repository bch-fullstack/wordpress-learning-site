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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sample-site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '5QvSc0im[%MOZ~mQ&DjV{iFvCw>O/&$r2t6*%<8zd7,D$u3 um:}-wi9|zh3qf2j' );
define( 'SECURE_AUTH_KEY',  '=P>sby}{.uFLPGV);g;jgGpSt.Id|N_JTy/17{Krv8S)gvDhbE}A,60|.GB2LE?{' );
define( 'LOGGED_IN_KEY',    '5:h*=8ww5y3tT;g4c]caW:vTKuE8dcyz$D=}U1O^n~C>^*:*U(Jp(5NOgf^@pqZn' );
define( 'NONCE_KEY',        'f8~*7||VM*GBUy*Uy0waT+XH4nXUjs{:]5v{:0P.zyCXv2jRak>m_E#O-,cE,so;' );
define( 'AUTH_SALT',        'o_bO} R/^VcT0Zg/tsPZY]p=,YX$.G`8PFbdi$WFK#RbqBGjcwRT!B0/rn?na94D' );
define( 'SECURE_AUTH_SALT', 'IfPuGx^(OHOb 1H``%d7j@K2?(mZ$gNm*u`<![3u%#]gy5]q&K}]cxLevdMan8+J' );
define( 'LOGGED_IN_SALT',   'U^EG~oU#8HQJ]:c/~uonYy-F=NJN;X#zaau:A]l14@i|Pzg`x  [>U/)B/<MrDyg' );
define( 'NONCE_SALT',       ' &x.;P*,_Avq)$!BD%}s+n!T])|}9ORqh#KIl?NsR7nL4=<s?2L}+^n>i*Q0_T&:' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
