<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'Acceuil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\SiteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Simulateur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/simulateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Combien' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\CombienController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/combien',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Quotite' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\QuotiteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/quotite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'M_NR' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::M_NRAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/simulateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'M_R' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::M_RAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/simulateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'C_NR' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::C_NRAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/simulateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'C_R' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::C_RAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/simulateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'V_NR' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::V_NRAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/simulateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'V_R' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::V_RAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/simulateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'S_NR' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::S_NRAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/simulateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'S_R' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::S_RAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/simulateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'D_NR' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::D_NRAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/simulateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'D_R' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::D_RAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/simulateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'P_NR' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::P_NRAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/simulateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'P_R' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::P_RAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/simulateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Ec_NR' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::Ec_NRAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/simulateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Ec_R' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::Ec_RAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/simulateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Nochild' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::FormNEAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/simulateur/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gp' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\CalculController::FormgpAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/simulateur/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'About' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\SiteController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/about',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SuccessFacileBundle\\Controller\\SiteController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
