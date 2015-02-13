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

        // mobile_splash_splash_request_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mobile_splash_splash_request_homepage')), array (  '_controller' => 'MobileSplashSplashRequestBundle:Default:index',));
        }

        if (0 === strpos($pathinfo, '/splash')) {
            // mobile_splash_request_add
            if ($pathinfo === '/splash/request/add') {
                return array (  '_controller' => 'MobileSplash\\SplashRequestBundle\\Controller\\SplashRequestController::addAction',  '_route' => 'mobile_splash_request_add',);
            }

            // mobile_splash_vendors
            if (0 === strpos($pathinfo, '/splash/getVendors') && preg_match('#^/splash/getVendors/(?P<country_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mobile_splash_vendors')), array (  '_controller' => 'MobileSplash\\SplashRequestBundle\\Controller\\SplashRequestController::getVendorsAction',));
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
