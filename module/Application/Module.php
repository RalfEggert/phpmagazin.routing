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
 * namespace definition and usage
 */
namespace Application;

use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

/**
 * Application module class
 *
 * @package    Application
 */
class Module implements
    BootstrapListenerInterface,
    ConfigProviderInterface,
    AutoloaderProviderInterface
{
    /**
     * Listen to the bootstrap event
     *
     * @param EventInterface $e
     *
     * @return void
     */
    public function onBootstrap(EventInterface $e)
    {
        /** @var MvcEvent $e */
        $eventManager = $e->getApplication()->getEventManager();

        // attach module listener
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    /**
     * Return an array for passing to Zend\Loader\AutoloaderFactory.
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                'application' => __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
