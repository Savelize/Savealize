<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/brand')) {
            // brand
            if (rtrim($pathinfo, '/') === '/brand') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'brand');
                }

                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\BrandController::indexAction',  '_route' => 'brand',);
            }

            // brand_show
            if (preg_match('#^/brand/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'brand_show')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\BrandController::showAction',));
            }

            // brand_new
            if ($pathinfo === '/brand/new') {
                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\BrandController::newAction',  '_route' => 'brand_new',);
            }

            // brand_create
            if ($pathinfo === '/brand/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_brand_create;
                }

                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\BrandController::createAction',  '_route' => 'brand_create',);
            }
            not_brand_create:

            // brand_edit
            if (preg_match('#^/brand/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'brand_edit')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\BrandController::editAction',));
            }

            // brand_update
            if (preg_match('#^/brand/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_brand_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'brand_update')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\BrandController::updateAction',));
            }
            not_brand_update:

            // brand_delete
            if (preg_match('#^/brand/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_brand_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'brand_delete')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\BrandController::deleteAction',));
            }
            not_brand_delete:

        }

        if (0 === strpos($pathinfo, '/category')) {
            // category
            if (rtrim($pathinfo, '/') === '/category') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'category');
                }

                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category',);
            }

            // category_show
            if (preg_match('#^/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\CategoryController::showAction',));
            }

            // category_new
            if ($pathinfo === '/category/new') {
                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
            }

            // category_create
            if ($pathinfo === '/category/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_category_create;
                }

                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\CategoryController::createAction',  '_route' => 'category_create',);
            }
            not_category_create:

            // category_edit
            if (preg_match('#^/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\CategoryController::editAction',));
            }

            // category_update
            if (preg_match('#^/category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_category_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_update')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\CategoryController::updateAction',));
            }
            not_category_update:

            // category_delete
            if (preg_match('#^/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_category_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\CategoryController::deleteAction',));
            }
            not_category_delete:

        }

        if (0 === strpos($pathinfo, '/subcategory')) {
            // subcategory
            if (rtrim($pathinfo, '/') === '/subcategory') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'subcategory');
                }

                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\SubCategoryController::indexAction',  '_route' => 'subcategory',);
            }

            // subcategory_show
            if (preg_match('#^/subcategory/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subcategory_show')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\SubCategoryController::showAction',));
            }

            // subcategory_new
            if ($pathinfo === '/subcategory/new') {
                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\SubCategoryController::newAction',  '_route' => 'subcategory_new',);
            }

            // subcategory_create
            if ($pathinfo === '/subcategory/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_subcategory_create;
                }

                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\SubCategoryController::createAction',  '_route' => 'subcategory_create',);
            }
            not_subcategory_create:

            // subcategory_edit
            if (preg_match('#^/subcategory/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subcategory_edit')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\SubCategoryController::editAction',));
            }

            // subcategory_update
            if (preg_match('#^/subcategory/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_subcategory_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subcategory_update')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\SubCategoryController::updateAction',));
            }
            not_subcategory_update:

            // subcategory_delete
            if (preg_match('#^/subcategory/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_subcategory_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subcategory_delete')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\SubCategoryController::deleteAction',));
            }
            not_subcategory_delete:

        }

        if (0 === strpos($pathinfo, '/company')) {
            // company
            if (rtrim($pathinfo, '/') === '/company') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'company');
                }

                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\CompanyController::indexAction',  '_route' => 'company',);
            }

            // company_show
            if (preg_match('#^/company/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'company_show')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\CompanyController::showAction',));
            }

            // company_new
            if ($pathinfo === '/company/new') {
                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\CompanyController::newAction',  '_route' => 'company_new',);
            }

            // company_create
            if ($pathinfo === '/company/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_company_create;
                }

                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\CompanyController::createAction',  '_route' => 'company_create',);
            }
            not_company_create:

            // company_edit
            if (preg_match('#^/company/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'company_edit')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\CompanyController::editAction',));
            }

            // company_update
            if (preg_match('#^/company/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_company_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'company_update')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\CompanyController::updateAction',));
            }
            not_company_update:

            // company_delete
            if (preg_match('#^/company/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_company_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'company_delete')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\CompanyController::deleteAction',));
            }
            not_company_delete:

        }

        if (0 === strpos($pathinfo, '/product')) {
            // product
            if (rtrim($pathinfo, '/') === '/product') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'product');
                }

                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\ProductController::indexAction',  '_route' => 'product',);
            }

            // product_show
            if (preg_match('#^/product/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_show')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\ProductController::showAction',));
            }

            // product_new
            if ($pathinfo === '/product/new') {
                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\ProductController::newAction',  '_route' => 'product_new',);
            }

            // product_create
            if ($pathinfo === '/product/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_product_create;
                }

                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\ProductController::createAction',  '_route' => 'product_create',);
            }
            not_product_create:

            // product_edit
            if (preg_match('#^/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_edit')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\ProductController::editAction',));
            }

            // product_update
            if (preg_match('#^/product/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_product_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_update')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\ProductController::updateAction',));
            }
            not_product_update:

            // product_delete
            if (preg_match('#^/product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_product_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_delete')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\ProductController::deleteAction',));
            }
            not_product_delete:

        }

        if (0 === strpos($pathinfo, '/useraccount')) {
            // useraccount
            if (rtrim($pathinfo, '/') === '/useraccount') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'useraccount');
                }

                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\UserAccountController::indexAction',  '_route' => 'useraccount',);
            }

            // useraccount_show
            if (preg_match('#^/useraccount/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'useraccount_show')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\UserAccountController::showAction',));
            }

            // useraccount_new
            if ($pathinfo === '/useraccount/new') {
                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\UserAccountController::newAction',  '_route' => 'useraccount_new',);
            }

            // useraccount_create
            if ($pathinfo === '/useraccount/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_useraccount_create;
                }

                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\UserAccountController::createAction',  '_route' => 'useraccount_create',);
            }
            not_useraccount_create:

            // useraccount_edit
            if (preg_match('#^/useraccount/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'useraccount_edit')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\UserAccountController::editAction',));
            }

            // useraccount_update
            if (preg_match('#^/useraccount/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_useraccount_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'useraccount_update')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\UserAccountController::updateAction',));
            }
            not_useraccount_update:

            // useraccount_delete
            if (preg_match('#^/useraccount/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_useraccount_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'useraccount_delete')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\UserAccountController::deleteAction',));
            }
            not_useraccount_delete:

        }

        if (0 === strpos($pathinfo, '/adminaccount')) {
            // adminaccount
            if (rtrim($pathinfo, '/') === '/adminaccount') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'adminaccount');
                }

                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\AdminAccountController::indexAction',  '_route' => 'adminaccount',);
            }

            // adminaccount_show
            if (preg_match('#^/adminaccount/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminaccount_show')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\AdminAccountController::showAction',));
            }

            // adminaccount_new
            if ($pathinfo === '/adminaccount/new') {
                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\AdminAccountController::newAction',  '_route' => 'adminaccount_new',);
            }

            // adminaccount_create
            if ($pathinfo === '/adminaccount/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_adminaccount_create;
                }

                return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\AdminAccountController::createAction',  '_route' => 'adminaccount_create',);
            }
            not_adminaccount_create:

            // adminaccount_edit
            if (preg_match('#^/adminaccount/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminaccount_edit')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\AdminAccountController::editAction',));
            }

            // adminaccount_update
            if (preg_match('#^/adminaccount/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_adminaccount_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminaccount_update')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\AdminAccountController::updateAction',));
            }
            not_adminaccount_update:

            // adminaccount_delete
            if (preg_match('#^/adminaccount/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_adminaccount_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminaccount_delete')), array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\AdminAccountController::deleteAction',));
            }
            not_adminaccount_delete:

        }

        // site_savalize_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'site_savalize_homepage');
            }

            return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'site_savalize_homepage',);
        }

        // site_user_page4
        if ($pathinfo === '/usrhistory') {
            return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\UserAccountController::usrhistoryAction',  '_route' => 'site_user_page4',);
        }

        // site_company_page10
        if ($pathinfo === '/page10') {
            return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\CompanyController::page10Action',  '_route' => 'site_company_page10',);
        }

        // SiteSavalizeBundle_reviews
        if ($pathinfo === '/reviews/show') {
            return array (  '_controller' => 'Site\\SavalizeBundle\\Controller\\DefaultController::showReviewsAction',  '_route' => 'SiteSavalizeBundle_reviews',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
