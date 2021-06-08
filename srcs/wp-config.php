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
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'mvirgina' );

/** MySQL database password */
define( 'DB_PASSWORD', 'GOLD' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');
/**#@+
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* @since 2.6.0
*/
define('AUTH_KEY',         '@&e!u78E3Rm471n?dj}jB!6Z]X~3:yR-XVr:e9sO[sAGs5O LWviE#~S4y+h$8yc');
define('SECURE_AUTH_KEY',  'Av`(D|s`ce.-w~VV24:lCFy~2[Psf@foAF5i[[!%P%sWy-=1=>x+dHD346W-.I{M');
define('LOGGED_IN_KEY',    'P^w r[|x2p1ys;xc^r:35nzZzIAx>{k&LxPq~~-|inBjBN,(|}D2+ZhBjtw@l?,p');
define('NONCE_KEY',        '^G]?d|N-Yc$Sj]0&|q09Rmo8W1p~P-K<L%z~_={Z_oZ[4{SrEewO+~P[^.{[XNCM');
define('AUTH_SALT',        '.BI-&idv,s`|;*%=e6m7V.~QZ/6zh4?qH*|~J=}2|`l.qhrVE3Pdt^&r^Z!=C-2<');
define('SECURE_AUTH_SALT', ' -sQ:lf5l4Ff8z85|c~@:V?Ah[m%E|T5Vq)f6/#Bh&eT/*aK+ p+hPRqQ()/I^y-');
define('LOGGED_IN_SALT',   '%F5I]=.]p6%lc$_3^O+6bg15zIGx&f91:pB3?;0(3+6BEjjA0D>bIR.Dj46/5PkZ');
define('NONCE_SALT',       'g:t?UR+5GThMp+sur {<!-@x]9gF;VY!m{ky|r5ANzpIMi1S.`6`NQI`,e!,*yt;');

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
