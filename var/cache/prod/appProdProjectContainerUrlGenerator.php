<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        'oc_louvre_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_louvre_client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::clientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_louvre_ticket' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::ticketAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ticket',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_louvre_resume' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::resumeAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/resume',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_louvre_confirm' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_louvre_fail' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::failAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_louvre_error' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::errorAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
