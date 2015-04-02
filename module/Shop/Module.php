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

namespace Shop;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\InitProviderInterface;
use Zend\ModuleManager\ModuleManagerInterface;

/**
 * Module Shop
 *
 * Sets up and configures the Shop module
 *
 * @package Shop
 */
class Module implements InitProviderInterface, ConfigProviderInterface,
                        AutoloaderProviderInterface
{

    /**
     * Init module
     *
     * Initialize module on loading
     *
     * @param ModuleManagerInterface $manager
     */
    public function init(ModuleManagerInterface $manager)
    {
        if (!defined('SHOP_MODULE_ROOT')) {
            define('SHOP_MODULE_ROOT', realpath(__DIR__));
        }
    }

    /**
     * Get module configuration
     *
     * Reads the module configuration from the config/ directory
     *
     * @return array module configuration data
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    /**
     * Get module autoloader configuration
     *
     * Sets up the module autoloader configuration
     *
     * @return array module autoloader configuration
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\\Loader\\ClassMapAutoloader' => array(
                __NAMESPACE__ => __DIR__ . '/autoload_classmap.php'
            ),
            'Zend\\Loader\\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__
                )
            )
        );
    }


}
