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

return array(
    'view_manager' => array(
        'template_map'        => include SHOP_MODULE_ROOT . '/template_map.php',
        'template_path_stack' => array(SHOP_MODULE_ROOT . '/view'),
    ),
    'controllers'  => array(
        'invokables' => array(
            'Shop\\Catalogue' => 'Shop\\Controller\\CatalogueController',
            'Shop\\Basket'    => 'Shop\\Controller\\BasketController',
            'Shop\\Index'     => 'Shop\\Controller\\IndexController',
        ),
    ),
    'router'       => array(
        'routes' => array(
            'shop' => array(
                'type'          => 'Literal',
                'options'       => array(
                    'route'    => '/shop',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Shop',
                        'controller'    => 'Index',
                        'action'        => 'index'
                    ),
                ),
                'may_terminate' => true,
                'child_routes'  => array(
                    'catalogue' => array(
                        'type'          => 'Literal',
                        'options'       => array(
                            'route'    => '/catalogue',
                            'defaults' => array(
                                'controller' => 'Catalogue',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes'  => array(
                            'show'     => array(
                                'type'    => 'Literal',
                                'options' => array(
                                    'route'    => '/show',
                                    'defaults' => array(
                                        'action' => 'show'
                                    ),
                                ),
                            ),
                            'category' => array(
                                'type'    => 'Literal',
                                'options' => array(
                                    'route'    => '/category',
                                    'defaults' => array(
                                        'action' => 'category'
                                    ),
                                ),
                            ),
                            'offers'   => array(
                                'type'    => 'Literal',
                                'options' => array(
                                    'route'    => '/offers',
                                    'defaults' => array(
                                        'action' => 'offers'
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'basket'    => array(
                        'type'          => 'Literal',
                        'options'       => array(
                            'route'    => '/basket',
                            'defaults' => array(
                                'controller' => 'Basket',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes'  => array(
                            'send'   => array(
                                'type'    => 'Literal',
                                'options' => array(
                                    'route'    => '/send',
                                    'defaults' => array(
                                        'action' => 'send'
                                    ),
                                ),
                            ),
                            'cancel' => array(
                                'type'    => 'Literal',
                                'options' => array(
                                    'route'    => '/cancel',
                                    'defaults' => array(
                                        'action' => 'cancel'
                                    ),
                                ),
                            ),
                            'add'    => array(
                                'type'    => 'Literal',
                                'options' => array(
                                    'route'    => '/add',
                                    'defaults' => array(
                                        'action' => 'add'
                                    ),
                                ),
                            ),
                            'remove' => array(
                                'type'    => 'Literal',
                                'options' => array(
                                    'route'    => '/remove',
                                    'defaults' => array(
                                        'action' => 'remove'
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);