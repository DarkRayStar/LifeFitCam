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
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '4$Fgc><2[cq^*0W&~6t#Gzd9DDxC7(6#J-yH2YZn^.ZW#AIMs>eqVOYSx},cC]3k' );
define( 'SECURE_AUTH_KEY',   'pu? ,#G${Q&.,wR41R%B{%3Z_.GM56wJTBY6jm!oqI%12b7h]AI;!A0<|47):M ?' );
define( 'LOGGED_IN_KEY',     '[ uis(C4@^/TAY FMb=Yfal&sfgqw$f?)^Z@xXSHftd]bL*IKupV[yg= prEJ]`t' );
define( 'NONCE_KEY',         '}v^js/:!>KHPLqWrpl4bOd&YKZz<nS+}hX<sM)/i f}hV+`QP3.yKX>?+FaESN)x' );
define( 'AUTH_SALT',         'S2mvJT#$4O$pg<z^%@4Jefu#:Pz!))s(Y.C=Vsmd4.}j0+T:W`3 e&,_ YG1_ZTg' );
define( 'SECURE_AUTH_SALT',  'pth _oI&+WyTdG-xMT@g!96o@:Z=hs-eIWo]3#S}S Q-rY0/LE573<SvePYcRIyt' );
define( 'LOGGED_IN_SALT',    'N1wCqjz4C&![*@SFN>O`v$:5o&vT+Cpc68B F6n#UBu$%_.VG.|a=LUa-e|W`mr7' );
define( 'NONCE_SALT',        '3Pu((M/QWl5_6+jix61WTmWm{@!lYJ$.5w0Z1B|48fnL~cE5@4HRgeD^_tg_TUVF' );
define( 'WP_CACHE_KEY_SALT', '+ZRhQ&u&6Q0K0CfaO5_8&mVgBAg[W?]p.H,jL<.*tNFw.%|P_}E<qo]hoLq8} lY' );


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
