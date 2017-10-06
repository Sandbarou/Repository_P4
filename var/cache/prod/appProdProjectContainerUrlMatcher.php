<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
                return $this->redirect($pathinfo.'/', 'oc_louvre_index');
            }

            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::indexAction',  '_route' => 'oc_louvre_index',);
        }

        // oc_louvre_client
        if ('/client' === $pathinfo) {
            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::clientAction',  '_route' => 'oc_louvre_client',);
        }

        // oc_louvre_confirm
        if ('/confirm' === $pathinfo) {
            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::confirmAction',  '_route' => 'oc_louvre_confirm',);
        }

        // oc_louvre_ticket
        if ('/ticket' === $pathinfo) {
            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::ticketAction',  '_route' => 'oc_louvre_ticket',);
        }

        // oc_louvre_resume
        if (0 === strpos($pathinfo, '/resume') && preg_match('#^/resume/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_louvre_resume')), array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::resumeAction',));
        }

        // oc_louvre_fail
        if ('/fail' === $pathinfo) {
            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::failAction',  '_route' => 'oc_louvre_fail',);
        }

        // oc_louvre_error
        if ('/error' === $pathinfo) {
            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::errorAction',  '_route' => 'oc_louvre_error',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
