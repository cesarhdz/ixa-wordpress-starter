<?php
/*
 * Main Wordpress Configuration
 * All keys of $config array will be defined as constants
 */
$config = array();


/**#@
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
$config['AUTH_KEY']         = '{AUTH_KEY_PHRASE}';
$config['SECURE_AUTH_KEY']  = '{SECURE_AUTH_KEY_PHRASE}';
$config['LOGGED_IN_KEY']    = '{LOGGED_IN_KEY_PHRASE}';
$config['NONCE_KEY']        = '{NONCE_KEY_PHRASE}';
$config['AUTH_SALT']        = '{AUTH_SALT_PHRASE}';
$config['SECURE_AUTH_SALT'] = '{SECURE_AUTH_SALT_PHRASE}';
$config['LOGGED_IN_SALT']   = '{LOGGED_IN_SALT_PHRASE}';
$config['NONCE_SALT']       = '{NONCE_SALT_PHRASE}';


/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
$config['WPLANG'] = '';


/**
 * Default theme is ixa-starter
 */
$config['WP_DEFAULT_THEME'] = 'ixa-starter';


/**
 * Site URL
 * URL of WordPress instalation
 */
$config['WP_SITEURL'] = WP_HOME . 'wordpress/';

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
$config['WP_CONTENT_DIR'] = __DIR__ . '/../app/';
$config['WP_CONTENT_URL'] = WP_HOME . 'app';


/**
 * Automatic Updates
 * more info: http://make.wordpress.org/core/2013/10/25/the-definitive-guide-to-disabling-auto-updates-in-wordpress-3-7/
 */
// Let's delegate dependency mangaement to Composer
$config['AUTOMATIC_UPDATER_DISABLED'] = 'true';


// Must return $config array
return $config;
