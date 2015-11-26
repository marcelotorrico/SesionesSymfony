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

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // mtd_registro_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::loginAction',  '_route' => 'mtd_registro_login',);
                }

                // mtd_registro_login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'mtd_registro_login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // mtd_login_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_login_homepage')), array (  '_controller' => 'MTD\\LoginBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/estudiante/in')) {
            // mtd_estudiante_index
            if ($pathinfo === '/estudiante/inicio') {
                return array (  '_controller' => 'MTD\\LoginBundle\\Controller\\EstudianteController::indexAction',  '_route' => 'mtd_estudiante_index',);
            }

            // mtd_estudiante_inscripcionMateria
            if ($pathinfo === '/estudiante/inscripcionMateria') {
                return array (  '_controller' => 'MTD\\LoginBundle\\Controller\\EstudianteController::inscripcionAction',  '_route' => 'mtd_estudiante_inscripcionMateria',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
