<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // Acceuil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Acceuil');
            }

            return array (  '_controller' => 'SuccessFacileBundle\\Controller\\SiteController::indexAction',  '_route' => 'Acceuil',);
        }

        // Other
        if ($pathinfo === '/calcul-droit-de-sucession') {
            return array (  '_controller' => 'SuccessFacileBundle\\Controller\\SiteController::quelchoixAction',  '_route' => 'Other',);
        }

        if (0 === strpos($pathinfo, '/droit-de-succession-')) {
            // Simulateur
            if ($pathinfo === '/droit-de-succession-mes-heritiers') {
                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::indexAction',  '_route' => 'Simulateur',);
            }

            // Combien
            if ($pathinfo === '/droit-de-succession-apres-heritage') {
                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CombienController::indexAction',  '_route' => 'Combien',);
            }

        }

        // Quotite
        if ($pathinfo === '/calcul-de-quotite-disponible') {
            return array (  '_controller' => 'SuccessFacileBundle\\Controller\\QuotiteController::indexAction',  '_route' => 'Quotite',);
        }

        if (0 === strpos($pathinfo, '/simulateur')) {
            // recompose
            if ($pathinfo === '/simulateur/recompose') {
                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::FORM_ifRAction',  '_route' => 'recompose',);
            }

            // form_NR
            if ($pathinfo === '/simulateur/form_NR') {
                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::Form_NRAction',  '_route' => 'form_NR',);
            }

            // Form_R
            if ($pathinfo === '/simulateur/Form_R') {
                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::Form_RAction',  '_route' => 'Form_R',);
            }

            if (0 === strpos($pathinfo, '/simulateur/formp')) {
                // formpatrimoine
                if ($pathinfo === '/simulateur/formpatrimoine') {
                    return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::FormpatrimoineAction',  '_route' => 'formpatrimoine',);
                }

                // formpourcent
                if ($pathinfo === '/simulateur/formpourcent') {
                    return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::FormpourcentAction',  '_route' => 'formpourcent',);
                }

            }

            // Nochild
            if ($pathinfo === '/simulateur/Nochild') {
                return array (  '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::FormNEAction',  '_route' => 'Nochild',);
            }

            // gp
            if ($pathinfo === '/simulateur/gp') {
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
