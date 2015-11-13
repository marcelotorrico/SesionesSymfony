<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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

        if (0 === strpos($pathinfo, '/hello')) {
            // acme_security_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_security_homepage')), array (  '_controller' => 'Acme\\SecurityBundle\\Controller\\DefaultController::indexAction',));
            }

            // mtd_registro_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_registro_homepage')), array (  '_controller' => 'MTD\\RegistroBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // mtd_registro
        if ($pathinfo === '/registro/index') {
            return array (  '_controller' => 'MTD\\RegistroBundle\\Controller\\RegistroController::indexAction',  '_route' => 'mtd_registro',);
        }

        // mtd_login_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_login_homepage')), array (  '_controller' => 'MTD\\LoginBundle\\Controller\\DefaultController::indexAction',));
        }

        // mtd_admin_index
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'MTD\\LoginBundle\\Controller\\DefaultController::adminAction',  '_route' => 'mtd_admin_index',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // login_check
        if ($pathinfo === '/registro/login_check') {
            return array('_route' => 'login_check');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
