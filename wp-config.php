<?php
use Ixa\WordPress\Configuration\Config;
require 'vendor/autoload.php';

/**
 * This proyect uses Ixa-WPConfig to handle configuration and
 * all configuration settings are in config/ folder:
 * 
 *  - .env.yml   # Environment Variables
 *  - config.php # Core Configuration
 *
 */ 

// Loading Environment Variables And Core Configuration
$config = new Config(__DIR__ . '/config');
$config->load();


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


/* That's all, stop editing! Happy blogging. */
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');