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
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'My\\TechnosBlogBundle\\Controller\\Front\\IndexController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/admin')) {
            // admin
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'My\\TechnosBlogBundle\\Controller\\Back\\AdminController::adminAction',  '_route' => 'admin',);
            }

            if (0 === strpos($pathinfo, '/admin/a')) {
                // admin_add_article
                if ('/admin/add-article' === $pathinfo) {
                    return array (  '_controller' => 'My\\TechnosBlogBundle\\Controller\\Back\\HandleArticleController::addArticleAction',  '_route' => 'admin_add_article',);
                }

                // admin_add_administrator
                if ('/admin/add-administrator' === $pathinfo) {
                    return array (  '_controller' => 'My\\TechnosBlogBundle\\Controller\\Back\\AddAdministratorController::addAdministratorAction',  '_route' => 'admin_add_administrator',);
                }

                if (0 === strpos($pathinfo, '/admin/all-')) {
                    // admin_all_article
                    if (0 === strpos($pathinfo, '/admin/all-articles') && preg_match('#^/admin/all\\-articles/(?P<page>[0-9]+)(?:/(?P<cat>[^/]++))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_all_article']), array (  '_controller' => 'My\\TechnosBlogBundle\\Controller\\Back\\HandleArticleController::allArticleAction',  'cat' => NULL,));
                    }

                    // admin_all_users
                    if (0 === strpos($pathinfo, '/admin/all-users') && preg_match('#^/admin/all\\-users/(?P<page>[0-9]+)(?:/(?P<cat>[^/]++))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_all_users']), array (  '_controller' => 'My\\TechnosBlogBundle\\Controller\\Back\\AllUsersController::allUsersAction',  'cat' => NULL,));
                    }

                    // admin_all_comments
                    if (0 === strpos($pathinfo, '/admin/all-comments') && preg_match('#^/admin/all\\-comments/(?P<page>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_all_comments']), array (  '_controller' => 'My\\TechnosBlogBundle\\Controller\\Back\\AllCommentsController::allCommentsAction',));
                    }

                }

            }

            // admin_update_article
            if (0 === strpos($pathinfo, '/admin/update-article') && preg_match('#^/admin/update\\-article/(?P<id>[0-9]+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_update_article']), array (  '_controller' => 'My\\TechnosBlogBundle\\Controller\\Back\\HandleArticleController::updateArticleAction',));
            }

            if (0 === strpos($pathinfo, '/admin/delete-')) {
                // admin_delete_article
                if (0 === strpos($pathinfo, '/admin/delete-article') && preg_match('#^/admin/delete\\-article/(?P<id>[0-9]+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_delete_article']), array (  '_controller' => 'My\\TechnosBlogBundle\\Controller\\Back\\HandleArticleController::deleteArticleAction',));
                }

                // admin_delete_user
                if (0 === strpos($pathinfo, '/admin/delete-user') && preg_match('#^/admin/delete\\-user/(?P<id>[0-9]+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_delete_user']), array (  '_controller' => 'My\\TechnosBlogBundle\\Controller\\Back\\AllUsersController::deleteUserAction',));
                }

                // admin_delete_comment
                if (0 === strpos($pathinfo, '/admin/delete-comment') && preg_match('#^/admin/delete\\-comment/(?P<id>[0-9]+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_delete_comment']), array (  '_controller' => 'My\\TechnosBlogBundle\\Controller\\Back\\AllCommentsController::deleteCommentAction',));
                }

            }

        }

        // ajax_request
        if ('/ajax-request' === $pathinfo) {
            return array (  '_controller' => 'My\\TechnosBlogBundle\\Controller\\Front\\IndexController::ajaxRequestAction',  '_route' => 'ajax_request',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'My\\TechnosBlogBundle\\Controller\\Front\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ('/login_check' === $pathinfo) {
                return ['_route' => 'login_check'];
            }

            // login_redirection
            if ('/login/redirection' === $pathinfo) {
                return array (  '_controller' => 'My\\TechnosBlogBundle\\Controller\\Front\\RedirectAfterLoginController::redirectionAction',  '_route' => 'login_redirection',);
            }

        }

        // logout
        if ('/logout' === $pathinfo) {
            return ['_route' => 'logout'];
        }

        // forgot
        if ('/forgot' === $pathinfo) {
            return array (  '_controller' => 'My\\TechnosBlogBundle\\Controller\\Front\\ForgotController::forgotAction',  '_route' => 'forgot',);
        }

        // resetting
        if ('/resetting' === $pathinfo) {
            return array (  '_controller' => 'My\\TechnosBlogBundle\\Controller\\Front\\ResettingController::resettingAction',  '_route' => 'resetting',);
        }

        // registration
        if ('/registration' === $pathinfo) {
            return array (  '_controller' => 'My\\TechnosBlogBundle\\Controller\\Front\\RegistrationController::registrationAction',  '_route' => 'registration',);
        }

        // search
        if ('/search' === $pathinfo) {
            return array (  '_controller' => 'My\\TechnosBlogBundle\\Controller\\Front\\SearchController::searchAction',  '_route' => 'search',);
        }

        // category
        if (preg_match('#^/(?P<category>[a-zA-Z]+)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'category']), array (  '_controller' => 'My\\TechnosBlogBundle\\Controller\\Front\\CategoryController::categoryAction',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_category;
            }

            return $ret;
        }
        not_category:

        // article
        if (preg_match('#^/(?P<category>[a-zA-Z-é]+)/(?P<slug>[^/]++)/(?P<id>[0-9]+)$#sDu', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'article']), array (  '_controller' => 'My\\TechnosBlogBundle\\Controller\\Front\\ArticleController::articleAction',));
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
