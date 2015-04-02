<?php
/**
 * Zend Framework 2 - PHP-Magazin Routing mit ZF2
 *
 * Beispiele für ZF2 Routing
 *
 * @package    Application
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @link       http://www.ralfeggert.de/
 */

/**
 * namespace definition and usage
 */
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Index controller
 *
 * Handles the homepage and other pages
 *
 * @package    Application
 */
class IndexController extends AbstractActionController
{
    /**
     *
     * Handle homepage
     */
    public function indexAction()
    {
        return new ViewModel(
            array()
        );
    }
}
