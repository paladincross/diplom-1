<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/main_page')) {
            // fsn_bot_homepage
            if ($pathinfo === '/main_page/start') {
                return array (  '_controller' => 'FSN\\BotBundle\\Controller\\DefaultController::indexAction',  '_route' => 'fsn_bot_homepage',);
            }

            // fsn_start_page
            if ($pathinfo === '/main_page/films') {
                return array (  '_controller' => 'FSN\\BotBundle\\Controller\\DefaultController::startAction',  '_route' => 'fsn_start_page',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
