<?php
/**
 * Zend Framework 2 - PHP-Magazin Routing mit ZF2
 *
 * Beispiele für ZF2 Routing
 * 
 * @package    Application
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @link       https://github.com/RalfEggert/phpmagazin.routing
 */

/**
 * Application setup
 * 
 * @package    Application
 */

define('TIMESTAMP_START', microtime(true));

// define application path
define('APPLICATION_ROOT', realpath(__DIR__ . '/..'));

// setup autoloading
require_once APPLICATION_ROOT . '/vendor/autoload.php';

// change dir
chdir(dirname(__DIR__));

// set configuration file
$config = include APPLICATION_ROOT . '/config/application.config.php';

// Run the application!
Zend\Mvc\Application::init($config)->run();
