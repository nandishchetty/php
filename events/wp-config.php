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
define('DB_NAME', 'events');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '3%f~6bL]t;aP=u*dZu.*,xA9H]r?0wJ84&Hy|QT$6Ka2W!dBfqJu]&*z8 )~4v9w');
define('SECURE_AUTH_KEY',  'J[~D$D{w+j1q5nQG)H0;wN4R}<UUV8k&({X3i29#g,3!c2mbt6%)KJU<:NW9yFY|');
define('LOGGED_IN_KEY',    '.D85OA25%yd*TVN1KtFf*Cq4iGGS7qj!}Zh,+YJE&PYDLp57L!|l~]T/<t@L6Gmv');
define('NONCE_KEY',        'IQBWS<<1*#4/zg8pfGWM62J8XeT33nUTa&Lb2ae~/GN8t(4cEmsbP26-|r=`H^E~');
define('AUTH_SALT',        'XCDyj:eck$/)4=,vT<xRnPJ[s#]xE8re$2uon0g/,t*T6P7sh|q~^yFJ9rhmej.w');
define('SECURE_AUTH_SALT', 'F]2{YJc[p.]?b?`ao-RABq%RAY*<@N{}u}>395[PXmvs+|b,DJ;kIvOx3SM(|B-W');
define('LOGGED_IN_SALT',   'x %RUc)77^GaYU<H@&6G[Vp~[ ^,Am)Z>8*cty9g`txSe$VJHZ-f!>pPV>,_<80 ');
define('NONCE_SALT',       '.$LJKG@`F0e}ctXe=nF^JP#D#StL?:aOYT($2dLSN`(Os;:kjMB[y}w W[0UN?xX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');
