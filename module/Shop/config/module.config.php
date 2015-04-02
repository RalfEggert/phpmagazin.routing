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
            ),
            'shop-catalogue' => array(
                'type'          => 'Literal',
                'options'       => array(
                    'route'    => '/shop/catalogue',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Shop',
                        'controller'    => 'Catalogue',
                        'action'        => 'index'
                    ),
                ),
            ),
            'shop-catalogue-show' => array(
                'type'          => 'Literal',
                'options'       => array(
                    'route'    => '/shop/catalogue/show',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Shop',
                        'controller'    => 'Catalogue',
                        'action'        => 'show'
                    ),
                ),
            ),
            'shop-catalogue-category' => array(
                'type'          => 'Literal',
                'options'       => array(
                    'route'    => '/shop/catalogue/category',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Shop',
                        'controller'    => 'Catalogue',
                        'action'        => 'category'
                    ),
                ),
            ),
            'shop-catalogue-offers' => array(
                'type'          => 'Literal',
                'options'       => array(
                    'route'    => '/shop/catalogue/offers',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Shop',
                        'controller'    => 'Catalogue',
                        'action'        => 'offers'
                    ),
                ),
            ),
            'shop-basket' => array(
                'type'          => 'Literal',
                'options'       => array(
                    'route'    => '/shop/basket',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Shop',
                        'controller'    => 'Basket',
                        'action'        => 'index'
                    ),
                ),
            ),
            'shop-basket-send' => array(
                'type'          => 'Literal',
                'options'       => array(
                    'route'    => '/shop/basket/send',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Shop',
                        'controller'    => 'Basket',
                        'action'        => 'send'
                    ),
                ),
            ),
            'shop-basket-cancel' => array(
                'type'          => 'Literal',
                'options'       => array(
                    'route'    => '/shop/basket/cancel',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Shop',
                        'controller'    => 'Basket',
                        'action'        => 'cancel'
                    ),
                ),
            ),
            'shop-basket-add' => array(
                'type'          => 'Literal',
                'options'       => array(
                    'route'    => '/shop/basket/add',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Shop',
                        'controller'    => 'Basket',
                        'action'        => 'add'
                    ),
                ),
            ),
            'shop-basket-remove' => array(
                'type'          => 'Literal',
                'options'       => array(
                    'route'    => '/shop/basket/remove',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Shop',
                        'controller'    => 'Basket',
                        'action'        => 'remove'
                    ),
                ),
            ),
        ),
    ),
);