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

        // Acceuil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Acceuil');
            }

            return array (  '_controller' => 'SuccessFacileBundle\\Controller\\SiteController::indexAction',  '_route' => 'Acceuil',);
        }

        // Simulateur
        if ($pathinfo === '/simulateur') {
            return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::indexAction',  '_route' => 'Simulateur',);
        }

        // Combien
        if ($pathinfo === '/combien') {
            return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CombienController::indexAction',  '_route' => 'Combien',);
        }

        // Quotite
        if ($pathinfo === '/quotite') {
            return array (  '_controller' => 'SuccessFacileBundle\\Controller\\QuotiteController::indexAction',  '_route' => 'Quotite',);
        }

        if (0 === strpos($pathinfo, '/simulateur')) {
            // M_NR
            if ($pathinfo === '/simulateur') {
                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::M_NRAction',  '_route' => 'M_NR',);
            }

            // M_R
            if ($pathinfo === '/simulateur') {
                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::M_RAction',  '_route' => 'M_R',);
            }

            // C_NR
            if ($pathinfo === '/simulateur') {
                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::C_NRAction',  '_route' => 'C_NR',);
            }

            // C_R
            if ($pathinfo === '/simulateur') {
                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::C_RAction',  '_route' => 'C_R',);
            }

            // V_NR
            if ($pathinfo === '/simulateur') {
                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::V_NRAction',  '_route' => 'V_NR',);
            }

            // V_R
            if ($pathinfo === '/simulateur') {
                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::V_RAction',  '_route' => 'V_R',);
            }

            // S_NR
            if ($pathinfo === '/simulateur') {
                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::S_NRAction',  '_route' => 'S_NR',);
            }

            // S_R
            if ($pathinfo === '/simulateur') {
                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::S_RAction',  '_route' => 'S_R',);
            }

            // D_NR
            if ($pathinfo === '/simulateur') {
                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::D_NRAction',  '_route' => 'D_NR',);
            }

            // D_R
            if ($pathinfo === '/simulateur') {
                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::D_RAction',  '_route' => 'D_R',);
            }

            // P_NR
            if ($pathinfo === '/simulateur') {
                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::P_NRAction',  '_route' => 'P_NR',);
            }

            // P_R
            if ($pathinfo === '/simulateur') {
                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::P_RAction',  '_route' => 'P_R',);
            }

            // Ec_NR
            if ($pathinfo === '/simulateur') {
                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::Ec_NRAction',  '_route' => 'Ec_NR',);
            }

            // Ec_R
            if ($pathinfo === '/simulateur') {
                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::Ec_RAction',  '_route' => 'Ec_R',);
            }

            // Nochild
            if (rtrim($pathinfo, '/') === '/simulateur') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Nochild');
                }

                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::FormNEAction',  '_route' => 'Nochild',);
            }

            // gp
            if (rtrim($pathinfo, '/') === '/simulateur') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'gp');
                }

                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::FormgpAction',  '_route' => 'gp',);
            }

        }

        // About
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'SuccessFacileBundle\\Controller\\SiteController::aboutAction',  '_route' => 'About',);
        }

        // Contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'SuccessFacileBundle\\Controller\\SiteController::contactAction',  '_route' => 'Contact',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
