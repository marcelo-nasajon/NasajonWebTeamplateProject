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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/bootstrap')) {
            // _assetic_bootstrap_css
            if ($pathinfo === '/css/bootstrap.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
            }

            // _assetic_bootstrap_css_0
            if ($pathinfo === '/css/bootstrap_bootstrap_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/bootstrap')) {
                // _assetic_bootstrap_js
                if ($pathinfo === '/js/bootstrap.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
                }

                if (0 === strpos($pathinfo, '/js/bootstrap_')) {
                    // _assetic_bootstrap_js_0
                    if ($pathinfo === '/js/bootstrap_transition_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
                    }

                    // _assetic_bootstrap_js_1
                    if ($pathinfo === '/js/bootstrap_alert_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_1',);
                    }

                    // _assetic_bootstrap_js_2
                    if ($pathinfo === '/js/bootstrap_button_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_2',);
                    }

                    if (0 === strpos($pathinfo, '/js/bootstrap_c')) {
                        // _assetic_bootstrap_js_3
                        if ($pathinfo === '/js/bootstrap_carousel_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_3',);
                        }

                        // _assetic_bootstrap_js_4
                        if ($pathinfo === '/js/bootstrap_collapse_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_4',);
                        }

                    }

                    // _assetic_bootstrap_js_5
                    if ($pathinfo === '/js/bootstrap_dropdown_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_5',);
                    }

                    // _assetic_bootstrap_js_6
                    if ($pathinfo === '/js/bootstrap_modal_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_6',);
                    }

                    // _assetic_bootstrap_js_7
                    if ($pathinfo === '/js/bootstrap_tooltip_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_7',);
                    }

                    // _assetic_bootstrap_js_8
                    if ($pathinfo === '/js/bootstrap_popover_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_8',);
                    }

                    // _assetic_bootstrap_js_9
                    if ($pathinfo === '/js/bootstrap_scrollspy_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_9',);
                    }

                    // _assetic_bootstrap_js_10
                    if ($pathinfo === '/js/bootstrap_tab_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_10',);
                    }

                    // _assetic_bootstrap_js_11
                    if ($pathinfo === '/js/bootstrap_affix_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_11',);
                    }

                    // _assetic_bootstrap_js_12
                    if ($pathinfo === '/js/bootstrap_bc-bootstrap-collection_13.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_12',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/jquery')) {
                // _assetic_jquery
                if ($pathinfo === '/js/jquery.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery',);
                }

                // _assetic_jquery_0
                if ($pathinfo === '/js/jquery_jquery-1.11.1_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images/9211c41')) {
            // _assetic_9211c41
            if ($pathinfo === '/images/9211c41.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9211c41',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_9211c41',);
            }

            // _assetic_9211c41_0
            if ($pathinfo === '/images/9211c41_status-imagem_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9211c41',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_9211c41_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/92088a8')) {
            // _assetic_92088a8
            if ($pathinfo === '/js/92088a8.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '92088a8',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_92088a8',);
            }

            // _assetic_92088a8_0
            if ($pathinfo === '/js/92088a8_scripts_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '92088a8',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_92088a8_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/c55fbd2')) {
            // _assetic_c55fbd2
            if ($pathinfo === '/css/c55fbd2.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c55fbd2',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_c55fbd2',);
            }

            if (0 === strpos($pathinfo, '/css/c55fbd2_')) {
                // _assetic_c55fbd2_0
                if ($pathinfo === '/css/c55fbd2_bootstrap.custom.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c55fbd2',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_c55fbd2_0',);
                }

                // _assetic_c55fbd2_1
                if ($pathinfo === '/css/c55fbd2_autocomplete_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c55fbd2',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_c55fbd2_1',);
                }

                // _assetic_c55fbd2_2
                if ($pathinfo === '/css/c55fbd2_closure-menu_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c55fbd2',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_c55fbd2_2',);
                }

                // _assetic_c55fbd2_3
                if ($pathinfo === '/css/c55fbd2_dialog_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c55fbd2',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_c55fbd2_3',);
                }

                // _assetic_c55fbd2_4
                if ($pathinfo === '/css/c55fbd2_estilo_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c55fbd2',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_c55fbd2_4',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/assets/fonts/glyphicons-halflings-regular')) {
            // _assetic_4c4fad3
            if ($pathinfo === '/assets/fonts/glyphicons-halflings-regular.ttf') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4c4fad3',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_4c4fad3',);
            }

            // _assetic_4c4fad3_0
            if ($pathinfo === '/assets/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.ttf') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4c4fad3',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_4c4fad3_0',);
            }

        }

        if (0 === strpos($pathinfo, '/images')) {
            if (0 === strpos($pathinfo, '/images/f57888d')) {
                // _assetic_f57888d
                if ($pathinfo === '/images/f57888d.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f57888d',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_f57888d',);
                }

                // _assetic_f57888d_0
                if ($pathinfo === '/images/f57888d_logo_1.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f57888d',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_f57888d_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/b763e9c')) {
                // _assetic_b763e9c
                if ($pathinfo === '/images/b763e9c.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b763e9c',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_b763e9c',);
                }

                // _assetic_b763e9c_0
                if ($pathinfo === '/images/b763e9c_icone-lupa_1.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b763e9c',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_b763e9c_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/a9aee3d')) {
                // _assetic_a9aee3d
                if ($pathinfo === '/images/a9aee3d.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a9aee3d',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_a9aee3d',);
                }

                // _assetic_a9aee3d_0
                if ($pathinfo === '/images/a9aee3d_icone-ferramentas_1.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a9aee3d',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_a9aee3d_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/ef19d7e')) {
                // _assetic_ef19d7e
                if ($pathinfo === '/images/ef19d7e.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ef19d7e',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_ef19d7e',);
                }

                // _assetic_ef19d7e_0
                if ($pathinfo === '/images/ef19d7e_icone-logout_1.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ef19d7e',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_ef19d7e_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/76eb6c0')) {
                // _assetic_76eb6c0
                if ($pathinfo === '/images/76eb6c0.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '76eb6c0',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_76eb6c0',);
                }

                // _assetic_76eb6c0_0
                if ($pathinfo === '/images/76eb6c0_65x65_1.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '76eb6c0',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_76eb6c0_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/087279d')) {
                // _assetic_087279d
                if ($pathinfo === '/images/087279d.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '087279d',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_087279d',);
                }

                // _assetic_087279d_0
                if ($pathinfo === '/images/087279d_35x35_1.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '087279d',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_087279d_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/1698525')) {
            // _assetic_1698525
            if ($pathinfo === '/js/1698525.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 1698525,  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1698525',);
            }

            if (0 === strpos($pathinfo, '/js/1698525_')) {
                if (0 === strpos($pathinfo, '/js/1698525_jquery')) {
                    // _assetic_1698525_0
                    if ($pathinfo === '/js/1698525_jquery-1.11.1.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 1698525,  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_1698525_0',);
                    }

                    // _assetic_1698525_1
                    if ($pathinfo === '/js/1698525_jquery.price_format.1.8.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 1698525,  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_1698525_1',);
                    }

                }

                // _assetic_1698525_2
                if ($pathinfo === '/js/1698525_scripts_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 1698525,  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_1698525_2',);
                }

            }

        }

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

        // nasajon_calendario_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nasajon_calendario_homepage');
            }

            return array (  '_controller' => 'Nasajon\\CalendarioBundle\\Controller\\DefaultController::indexAction',  '_route' => 'nasajon_calendario_homepage',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
