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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'EvaluatorBundle\\Controller\\UserController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // evaluator_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'evaluator_homepage');
            }

            return array (  '_controller' => 'EvaluatorBundle\\Controller\\DefaultController::indexAction',  '_route' => 'evaluator_homepage',);
        }

        if (0 === strpos($pathinfo, '/courses')) {
            // evaluator_index_courses
            if ($pathinfo === '/courses') {
                return array (  '_controller' => 'EvaluatorBundle\\Controller\\CourseController::indexAction',  '_route' => 'evaluator_index_courses',);
            }

            // evaluator_add_course
            if ($pathinfo === '/courses/add') {
                return array (  '_controller' => 'EvaluatorBundle\\Controller\\CourseController::addAction',  '_route' => 'evaluator_add_course',);
            }

            // evaluator_delete_course
            if (0 === strpos($pathinfo, '/courses/delete') && preg_match('#^/courses/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluator_delete_course')), array (  '_controller' => 'EvaluatorBundle\\Controller\\CourseController::deleteAction',));
            }

            // evaluator_enter_course
            if (0 === strpos($pathinfo, '/courses/enter') && preg_match('#^/courses/enter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluator_enter_course')), array (  '_controller' => 'EvaluatorBundle\\Controller\\CourseController::enterAction',));
            }

        }

        if (0 === strpos($pathinfo, '/partials')) {
            // evaluator_add_partial
            if (0 === strpos($pathinfo, '/partials/add') && preg_match('#^/partials/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluator_add_partial')), array (  '_controller' => 'EvaluatorBundle\\Controller\\PartialController::addAction',));
            }

            // evaluator_delete_partial
            if (0 === strpos($pathinfo, '/partials/delete') && preg_match('#^/partials/delete/(?P<idPartial>[^/]+)(?P<idCourse>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluator_delete_partial')), array (  '_controller' => 'EvaluatorBundle\\Controller\\PartialController::deleteAction',));
            }

        }

        // evaluator_ajax_updateMark
        if ($pathinfo === '/updateMark') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_evaluator_ajax_updateMark;
            }

            return array (  '_controller' => 'EvaluatorBundle\\Controller\\AjaxController::updateMarkAction',  '_route' => 'evaluator_ajax_updateMark',);
        }
        not_evaluator_ajax_updateMark:

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
