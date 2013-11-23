<?php 
/**
 * Load env vars.
 */
Dotenv::load(__DIR__);


/**
 * Required Env Vars
 */
$requiredEnvVars = array(
	'DB_HOST', 
	'DB_NAME', 
	'DB_USER', 
	'DB_PASSWORD', 
	'WP_HOME'
);


/*
 * Make sure required envars are set
 */ 
Dotenv::required($requiredEnvVars);

/*
 * ...and required envars are converted to contants
 */
foreach ($requiredEnvVars as $envVar){
	define($envVar, getenv($envVar));
}