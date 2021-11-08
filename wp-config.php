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
define( 'DB_NAME', 'firstsite' );

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
define( 'AUTH_KEY',         'MYI_?NAo>w%}bs]2+Jf/p>Dy{ST S_P5a$ nC7E2PI*c;Ez;$P$S#@t2@BD`P04G' );
define( 'SECURE_AUTH_KEY',  ' qew[4<z]JAK|]`dY85eE]JfDg|yN>kh^^%ojJ8ru[J!H)+-=fiMUBu$UZVG+p^%' );
define( 'LOGGED_IN_KEY',    '|}(|+<P8gq9~,su&lnlp[`NG$@ww.J1U@zWKMu/kF-*O-XlsE=B?.G+70RSX{$M|' );
define( 'NONCE_KEY',        'Oh`C;PUPyS]a?jPD[]>aL9<*$EyP;{&1ig1r)V&dL^Q`{WgQ1s-zT5JYKv6K?SqD' );
define( 'AUTH_SALT',        'Q9$a~msN,vF=5[bP*^RgV;^Nr}uD2#rmAk$y];y3Eo4oNqEkQ(}1!A&x~]6m}fXw' );
define( 'SECURE_AUTH_SALT', 'i,>ZsH([WSdpN:n+z008JT$T}~+rag]hd0m?KzMG`XiCN7}$!k=`4r7`]M9xhA r' );
define( 'LOGGED_IN_SALT',   'Uw{fk5mnjGJy:[1K3W_g),FW(a5/j^bDg8 ^U[ypHPo*5Mq|xCYDcx$HG.1`W,U;' );
define( 'NONCE_SALT',       'z2ngj|8._di~N</6~`f#C<w3os 2Vs-K|5h-[PV]8O0]3HHdz(oR,CE#cFaL$EO^' );

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
