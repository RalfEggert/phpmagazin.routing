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

namespace Shop\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * BasketController
 *
 * Handles the BasketController requests for the Shop Module
 *
 * @package Shop\Controller
 */
class BasketController extends AbstractActionController
{

    /**
     * Index action for BasketController
     *
     * @return ViewModel
     */
    public function indexAction()
    {
        $viewModel = new ViewModel();

        return $viewModel;
    }

    /**
     * Send action for BasketController
     *
     * @return ViewModel
     */
    public function sendAction()
    {
        $viewModel = new ViewModel();

        return $viewModel;
    }

    /**
     * Cancel action for BasketController
     *
     * @return ViewModel
     */
    public function cancelAction()
    {
        $viewModel = new ViewModel();

        return $viewModel;
    }

    /**
     * Add action for BasketController
     *
     * @return ViewModel
     */
    public function addAction()
    {
        $viewModel = new ViewModel();

        return $viewModel;
    }

    /**
     * Remove action for BasketController
     *
     * @return ViewModel
     */
    public function removeAction()
    {
        $viewModel = new ViewModel();

        return $viewModel;
    }


}
