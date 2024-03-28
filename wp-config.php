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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //

if (strstr($_SERVER['SERVER_NAME'], 'fictional-university.local')) {
	define( 'DB_NAME', 'local' );


define( 'DB_USER', 'root' );


define( 'DB_PASSWORD', 'root' );


define( 'DB_HOST', 'localhost' );
} else {
	define( 'DB_NAME', 'dbl9cjayjesszi' );


define( 'DB_USER', 'uggrszkmhszkk' );


define( 'DB_PASSWORD', 'MfbiBHi2020!' );


define( 'DB_HOST', '127.0.0.1' );
}



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
define( 'AUTH_KEY',          'W9Um%36Umv# yB&z2t^-Z?:GLz4nm <y$1*9Qx8{D`@wVWQ[:4=WE$,y23ylkyYE' );
define( 'SECURE_AUTH_KEY',   'vN2p$l&4|m.%q5>,z?3.pyZOU99^mA!(I+![zl?nKRW0i.L+y[DCuW[SDjAsu&88' );
define( 'LOGGED_IN_KEY',     '$E~z]4n<y{mcti:!*.l5=.r#YLpMG;0$R`;E*ugOa<4|odM:_TB>r=9o:5qcDouQ' );
define( 'NONCE_KEY',         '0j^ZewEKz$(/}/FOn(=2;TC;x{_X,GZ/t#<pK14cJMOVNM,3fvx6J)d}Rl<JQ~{B' );
define( 'AUTH_SALT',         '5IBy/pZRSp&[WhnV}[aZ,]5>bmDp*FHKzxKgDKlu ){ v[`Kic9+eu}aA/;W/@o1' );
define( 'SECURE_AUTH_SALT',  '!h?[[*9k{vKfa!N.[pFmBc7-UatFo9kermX`_OS0uCc;kJb!$7}u%ZqXj5Mn;Qka' );
define( 'LOGGED_IN_SALT',    'u:i.y/:mO:-czAJ|HRi6B/BZ.)2+3RG&@O{[dg:><eUsZ>XbZDTe_pGMp)7x#]:E' );
define( 'NONCE_SALT',        'O@K8#5ia]*kD 9pI]jj8wv#TL1. ,b+sPNI/iYtn__.rVp]chjj<Ug=E(iqMk<D3' );
define( 'WP_CACHE_KEY_SALT', ':*a_Xy1C&Xvm J>i%h&I{f}rO]f^y^O)Ql_Gj.rS9kp[2g_3WR-?e3Ps&hJQt/xL' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
