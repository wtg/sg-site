<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define('WP_CACHE', true); //Added by WP-Cache Manager
// define( 'WPCACHEHOME', '/home/stugov/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DISABLE_CACHE', true);
	   
// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));
/** MySQL database username */
define('DB_USER', $db["user"]);
/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);
/** MySQL hostname */
define('DB_HOST', $db["host"]);


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '[c#fnTZ6tkhhkfkdke!O`-%bPfat=;3vu#SBouhkk}4W|(`^#tgL51hm$|a|IfDC');
define('SECURE_AUTH_KEY',  'vWW0}dLx4mv*|YB,RB29H+3ZnH<t_?7-T@f*V[9f_rnU8&}]LWljj|TrgA^k1V3D');
define('LOGGED_IN_KEY',    '|ElM~VFqU.,!{1-PL<=BNXQ_2eZ9*iOUuKb+)%}SaXfS)uA|/asdftA`T_LUC!&(');
define('NONCE_KEY',        'MG80#_3k905i+5$@}av%I_!9%awH9|w}/||2|#ey}{*|q=J5u7fdfMPeckH+pc%#');
define('AUTH_SALT',        '-x@?E6vqZG{%@By|Z#j|:bkEmib>6,n9Uc*]z@fdfu2Wq]-*.n/&=m1yGH#+X*8#');
define('SECURE_AUTH_SALT', 'H*BnLy# |pd4yQa,XD[9xhLnb&Ef_aasdoXc<^$z%?Mh]-Z:{H}GRV0A8Ep]/ZmS');
define('LOGGED_IN_SALT',   'mO#TPdDqlFw;%G+gn=#|z^hsSrq|jdfas>d@|<(d0lLS|hK^;+qcm%N|Kzm7j#.4');
define('NONCE_SALT',       'P91=3;XtUaub[cz:++M4|g5n[i`fdvA:1^}AnAbB&kWbn?N9%9$%b!6TCWX(SR*:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

// in some setups HTTP_X_FORWARDED_PROTO might contain 
// a comma-separated list e.g. http,https
// so check for https existence
$_SERVER['HTTPS']='on';

define('WP_HOME', 'https://sg.rpi.edu');
define('WP_SITEURL', 'https://sg.rpi.edu');

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Set up secret wp-admin folder */
// define('WP_ADMIN_DIR', 'stugov-backend');
// define( 'ADMIN_COOKIE_PATH', SITECOOKIEPATH . WP_ADMIN_DIR);