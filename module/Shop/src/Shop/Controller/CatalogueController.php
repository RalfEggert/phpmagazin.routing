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
 * CatalogueController
 *
 * Handles the CatalogueController requests for the Shop Module
 *
 * @package Shop\Controller
 */
class CatalogueController extends AbstractActionController
{

    /**
     * Index action for CatalogueController
     *
     * @return ViewModel
     */
    public function indexAction()
    {
        $viewModel = new ViewModel();

        return $viewModel;
    }

    /**
     * Show action for CatalogueController
     *
     * @return ViewModel
     */
    public function showAction()
    {
        $viewModel = new ViewModel();

        return $viewModel;
    }

    /**
     * Category action for CatalogueController
     *
     * @return ViewModel
     */
    public function categoryAction()
    {
        $viewModel = new ViewModel();

        return $viewModel;
    }

    /**
     * Offers action for CatalogueController
     *
     * @return ViewModel
     */
    public function offersAction()
    {
        $viewModel = new ViewModel();

        return $viewModel;
    }


}
