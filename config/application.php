<?php

/**
 * LaraPress path setups
 */

/** @var string Directory containing all of the site's files */
$root_dir = dirname(__DIR__);

/** @var string Document Root */
$webroot_dir = $root_dir.DS.'public';

/**
 * Composer autoload
 */
if (file_exists($autoload = $root_dir.DS.'vendor'.DS.'autoload.php')) {
    require_once $autoload;
}

/**
 * Expose global env() function from oscarotero/env
 */
Env::init();

/**
 * LaraPress environment configuration
 */
 if (file_exists($environment = $root_dir.DS.'config'.DS.'environment.php')) {
     $environment = require_once $environment;
 } else {
     die('LaraPress is unable to find your environment.php setup file.');
 }

 /**
  * Define environment file
  */
 $locations = new \xPress\Config\Environment($environment);
 $locations = $locations->which(gethostname());
 $file = empty($locations) ? '.env' : ".env.{$locations}";

 /**
  * Load larapress environment
  */
 $dotenv = new \Dotenv\Dotenv($root_dir, $file);
 $dotenv->load();
 $dotenv->required(['DB_NAME', 'DB_USER', 'DB_PASSWORD', 'DB_HOST', 'WP_HOME', 'WP_SITEURL']);

 /**
  * Load environment configuration
  */
 // If .env file selected, default its location to development configuration.
 $locations = ('.env' === $file) ? 'development' : $locations;
 if (file_exists($config = $root_dir.DS.'config'.DS.'environments'.DS.$locations.'.php')) {
     require_once $config;
 }

 /**
  * Include shared configuration
  */
 if (file_exists($settings = $root_dir.DS.'config'.DS.'settings.php')) {
     require_once $settings;
 }

 /**
  * LaraPress error handling
  */
 if (defined('LARAPRESS_ERROR') && LARAPRESS_ERROR) {
     $whoops = new \Whoops\Run();
     $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
     $whoops->register();
 }

 /**
  * LaraPress defined constants
  */
define('LARAPRESS_STORAGE', $root_dir.DS.'storage');

/**
 * URLs
 */
define('WP_HOME', env('WP_HOME'));
define('WP_SITEURL', env('WP_SITEURL'));

 /**
 * Custom Content Directory
 */
define('CONTENT_DIR', 'app');
define('WP_CONTENT_DIR', $webroot_dir.DS.CONTENT_DIR);
define('WP_CONTENT_URL', WP_HOME.DS.CONTENT_DIR);

/**
 * Bootstrap WordPress
 */
if (!defined('ABSPATH')) {
    define('ABSPATH', $webroot_dir . '/core/');
}
