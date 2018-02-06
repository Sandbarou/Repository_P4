<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        // oc_louvre_index
        if ('' === $trimmedPathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_oc_louvre_index;
            }

            $ret = array (  '_controller' => 'OC\\LouvreBundle\\Controller\\ViewController::indexAction',  '_route' => 'oc_louvre_index',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'oc_louvre_index'));
            }

            return $ret;
        }
        not_oc_louvre_index:

        // oc_louvre_date
        if ('/date' === $pathinfo) {
            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::dateAction',  '_route' => 'oc_louvre_date',);
        }

        // oc_louvre_done
        if ('/done' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_oc_louvre_done;
            }

            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\MailController::doneAction',  '_route' => 'oc_louvre_done',);
        }
        not_oc_louvre_done:

        // oc_louvre_commande
        if ('/commande' === $pathinfo) {
            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::commandeAction',  '_route' => 'oc_louvre_commande',);
        }

        // oc_louvre_confirm
        if ('/confirm' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_oc_louvre_confirm;
            }

            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::confirmAction',  '_route' => 'oc_louvre_confirm',);
        }
        not_oc_louvre_confirm:

        // oc_louvre_prix
        if ('/prix' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_oc_louvre_prix;
            }

            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::prixAction',  '_route' => 'oc_louvre_prix',);
        }
        not_oc_louvre_prix:

        // oc_louvre_payment
        if ('/payment' === $pathinfo) {
            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\LouvreController::paymentAction',  '_route' => 'oc_louvre_payment',);
        }

        // oc_louvre_resume
        if ('/resume' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_oc_louvre_resume;
            }

            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\ViewController::resumeAction',  '_route' => 'oc_louvre_resume',);
        }
        not_oc_louvre_resume:

        // oc_louvre_mail
        if ('/mail' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_oc_louvre_mail;
            }

            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\MailController::mailAction',  '_route' => 'oc_louvre_mail',);
        }
        not_oc_louvre_mail:

        // oc_louvre_fail
        if ('/fail' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_oc_louvre_fail;
            }

            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\ViewController::failAction',  '_route' => 'oc_louvre_fail',);
        }
        not_oc_louvre_fail:

        // oc_louvre_error
        if ('/error' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_oc_louvre_error;
            }

            return array (  '_controller' => 'OC\\LouvreBundle\\Controller\\ViewController::errorAction',  '_route' => 'oc_louvre_error',);
        }
        not_oc_louvre_error:

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
