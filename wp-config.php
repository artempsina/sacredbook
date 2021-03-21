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
define( 'DB_NAME', 'test1_db' );

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
define( 'AUTH_KEY',         '@{fHE.Igo&6`:Z2=3Nv;t;1~5whGt35cxZh[!Ke.!2vty3VUpX!q`?(`iD0,cuLh' );
define( 'SECURE_AUTH_KEY',  'Onz UI.L[`t~6&Q{qiQIa_/nr=AR1z7]?inb+!@J(rP=Ex(:s[Mp2366{@[l MIJ' );
define( 'LOGGED_IN_KEY',    'OlRU*&G6.Sz8Fa!Em[glKr&Gd))7w9u*hRyg?zpd/h~9m}`@A L5OSyU}>3Od@]I' );
define( 'NONCE_KEY',        'pey#$|6q6!.54`dgj{rQhIKs@Ha_o~9=~]S^N$xr4ybBgu9DH|l&GLXf8te}Tct9' );
define( 'AUTH_SALT',        'eoT.|cN-xk8N~ogq/ZAe_CR9TPo~V9)wfx>1E1FN)A{A_JHKfpfw)nI9<(*NHmXf' );
define( 'SECURE_AUTH_SALT', 'sYIc@+~*RL]UV$U8>t~+;ic8LiY]Y(_V5jg-]om/-$@!0EN9JY&DF}L`tZ%elghx' );
define( 'LOGGED_IN_SALT',   '?5ODZ3^$cy^z=vH t7Ti8:Mk;]!:gfuEbBZZi3Lfd;KHAM$)2D?W4r+f4l]g9Z+C' );
define( 'NONCE_SALT',       '{F/xaS|#00|QQN,UEYYVSBsd)u59H7UBqAUuvv;R.QMS,~Y=:P|P6sC%lAN@*OU5' );

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
