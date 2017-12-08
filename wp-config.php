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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/html/wordpress/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'wp_db_121117');

/** MySQL database username */
define('DB_USER', 'wp_db_usr');

/** MySQL database password */
define('DB_PASSWORD', 'pbpcJbX7');

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
define('AUTH_KEY',         '?&0<4,tS,VPM7vDC`e6H`:y{wv[TNjpM&iyp~TkU0pBmvJwQDk~m#QZzsifjXn.)');
define('SECURE_AUTH_KEY',  'kT0P<7<ao`]:DCoHw0nyVth*#<= nGy3Mv`L|XOv=]nu&c75:sRW=fMkYSg2@ZVx');
define('LOGGED_IN_KEY',    'oC{`toJkQI51??Bgq+HF2hmi?,k{L|chxT/s`6uQ+?AlK0du(zER!0HbuHN%Vq,r');
define('NONCE_KEY',        ':H?R~9)R/W_:4Nj`FFq+3>HX0x>%kiGVx:DGMF+H+>4 <6,4S:l5ZwlPQza~} ~@');
define('AUTH_SALT',        'c>z,q8P[W<y4^{J|nyo!AXHMi1s|b4Z%iqWjh+T1YUDvqBvZ=s|1{XE+p=YLokG<');
define('SECURE_AUTH_SALT', '2lUsx`sO[eAN$7jTx0oV!<5&!9Kv|t;X;iurVrYH1//(&e0<%eKhYZ@{k:-|Y@:n');
define('LOGGED_IN_SALT',   '61i8lJ8;mhA}]Lv8EH>WjNpPl@I S&eeY7)b[> REX[X%39&x;j FM3VM5d;9gtM');
define('NONCE_SALT',       'drUTwkVmsW4(-IoE@H0j_0k;cxz}G#//J.{.NEwDH0@ccde ##+DGo*|1i?hz}p,');

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

/** Define FTP details here **/
define('FS_METHOD','direct');
define("FTP_HOST", "localhost");
define("FTP_USER", “wp-ftp-peterbrunton”);
define("FTP_PASS", “pbpcJbX7”);
/***/

/** Define a path to the uploads **/
define(‘UPLOADS’, ‘wp-content/uploads’);

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
