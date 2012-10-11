<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uAFJ%y6=<T)LQ+p~CV<#Dxj$V|Fu%@v+IQ-&nD;lT$,MjgT72S:XJpfOtWC=,!g1');
define('SECURE_AUTH_KEY',  'i~o4yho@F~dq+InZMrS32Q/`ab2`d.L71IQwS!^<!7D<m3lW|?&CX6/H6?;Vs>eM');
define('LOGGED_IN_KEY',    '!Kg>Zfh@b811+wySGqOr]Cb]TC@!+~uH)?eT<=N/U-6(m;d{h6b/CW)n{~h{zq{Y');
define('NONCE_KEY',        '5TRXBq_1Yj;aDa6Dcg;zDl-`~N~>@`w^A/:KhfD)y;9Yi<U^f)[2CG|L(fAzz0yJ');
define('AUTH_SALT',        'P{u)uZdWfVQv[)$HW6Q.~hAURc{WV,]U&<< [`U!XpB3!`LUEI3rjEd@T %&Ds3x');
define('SECURE_AUTH_SALT', 'Dy[ @y SQTyY(Y%ss9)(J>f}}~UVm2?%tpu@B&gW<%p@!6R[.o^X^$}|m2`b)N0&');
define('LOGGED_IN_SALT',   'iNaMQ[[}^=n`0e(I6A*bb?y!rA~Vw@cfel#wszB-4I4!7>inK^Fbyo%!^ya+u`iK');
define('NONCE_SALT',       '|9:Uuf]pcLK9$|.QY&I],nqWa8QkoA/*9P5+2ru*^<h,P09]]T4YmZy+l3m|N0(L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
