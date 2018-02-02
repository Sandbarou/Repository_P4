<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // oc_louvre_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'oc_louvre_index');
            }

            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::indexAction',  '_route' => 'oc_louvre_index',);
        }

        // oc_louvre_date
        if ('/date' === $pathinfo) {
            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::dateAction',  '_route' => 'oc_louvre_date',);
        }

        // oc_louvre_done
        if ('/done' === $pathinfo) {
            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::doneAction',  '_route' => 'oc_louvre_done',);
        }

        if (0 === strpos($pathinfo, '/co')) {
            // oc_louvre_commande
            if ('/commande' === $pathinfo) {
                return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::commandeAction',  '_route' => 'oc_louvre_commande',);
            }

            // oc_louvre_confirm
            if ('/confirm' === $pathinfo) {
                return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::confirmAction',  '_route' => 'oc_louvre_confirm',);
            }

            // oc_louvre_contact
            if ('/contact' === $pathinfo) {
                return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::contactAction',  '_route' => 'oc_louvre_contact',);
            }

        }

        // oc_louvre_prix
        if ('/prix' === $pathinfo) {
            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::prixAction',  '_route' => 'oc_louvre_prix',);
        }

        // oc_louvre_payment
        if ('/payment' === $pathinfo) {
            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::paymentAction',  '_route' => 'oc_louvre_payment',);
        }

        // oc_louvre_resume
        if ('/resume' === $pathinfo) {
            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::resumeAction',  '_route' => 'oc_louvre_resume',);
        }

        // oc_louvre_mail
        if ('/mail' === $pathinfo) {
            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::mailAction',  '_route' => 'oc_louvre_mail',);
        }

        // oc_louvre_fail
        if ('/fail' === $pathinfo) {
            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::failAction',  '_route' => 'oc_louvre_fail',);
        }

        // oc_louvre_error
        if ('/error' === $pathinfo) {
            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::errorAction',  '_route' => 'oc_louvre_error',);
        }

        // oc_louvre_ajaxNumber
        if (0 === strpos($pathinfo, '/ajax/number') && preg_match('#^/ajax/number/(?P<date>[^/]++)/(?P<number>[^/]++)$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_oc_louvre_ajaxNumber;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_louvre_ajaxNumber')), array (  '_controller' => 'OC\\LouvreBundle\\Controller\\AjaxController::ajaxNumberAction',));
        }
        not_oc_louvre_ajaxNumber:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
