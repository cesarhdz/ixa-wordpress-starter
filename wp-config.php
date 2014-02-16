<?php
/**
 * The base configurations of the WordPress.
 *
 * 		- Table Prefix,
 * 		- Secret Keys, 
 * 		- WordPress Language
 * 		- ABSPATH
 *
 * You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. {@link http://generatewp.com/wp-config/} and GenerateWp
 * 
 * Besides the regular instalation of WordPress, and in order to be portable, the following configurations are highly recommended:
 *   	- WP_SITE_URL
 *   	- WP_CONTENT_DIR
 *   	- WP_CONTENT_URL
 *   	- Convenient Varaibles
 */
use Ixa\WordPress\Configuration\Configuration;

require_once 'vendor/autoload.php';


// Loading Environment Variables
$config = new Configuration(dirname(__FILE__) . '/config');
$config->load();


// var_dump(ENVIRONMENT);
// exit();
/**
 * Default theme is ixa-starter
 */
define('WP_DEFAULT_THEME', 'ixa-starter');


/**#@
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = getenv('DB_TABLE_PREFIX') ?: 'wp_';

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
define('WP_DEBUG', true);


/**
 * Site URL
 * URL of WordPress instalation
 */
define('WP_SITEURL',  WP_HOME . 'wordpress/');


/**
 * Content Dir
 * Must be set in order to overwrite {wordpress-core}/wp-content
 * and must match:
 *
 *     "installer-paths": {
 *         "app/plugins/{$name}/": ["type:wordpress-plugin"]
 *    	}
 *
 * in composer.json. Defaults to: app
 * 
 * see: http://codex.wordpress.org/Determining_Plugin_and_Content_Directories
 * WP_CONTENT_DIR  // no trailing slash, full paths only
 * WP_CONTENT_URL  // full url 
 */
define('WP_CONTENT_DIR', dirname(__FILE__) . '/app');
define('WP_CONTENT_URL', WP_HOME . 'app');


/** CONVENIENT CONSTANTS */


/**
 * Automatic Updates
 * more info: http://make.wordpress.org/core/2013/10/25/the-definitive-guide-to-disabling-auto-updates-in-wordpress-3-7/
 */

// Let's delegate dependency mangaement to Composer
define( 'AUTOMATIC_UPDATER_DISABLED', 'true' );

/**
 * PHP Memory
 */
// define( 'WP_MEMORY_LIMIT', '64M' );

/* That's all, stop editing! Happy blogging. */
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');