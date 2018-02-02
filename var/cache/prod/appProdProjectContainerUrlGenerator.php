<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'oc_louvre_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_louvre_date' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::dateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/date',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_louvre_commande' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::commandeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/commande',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_louvre_prix' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::prixAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/prix',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_louvre_resume' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::resumeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resume',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_louvre_payment' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::paymentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/payment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_louvre_confirm' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_louvre_mail' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::mailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_louvre_done' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::doneAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/done',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_louvre_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_louvre_fail' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::failAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_louvre_error' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::errorAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_louvre_ajaxNumber' => array (  0 =>   array (    0 => 'date',    1 => 'number',  ),  1 =>   array (    '_controller' => 'OC\\LouvreBundle\\Controller\\AjaxController::ajaxNumberAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'number',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'date',    ),    2 =>     array (      0 => 'text',      1 => '/ajax/number',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
