<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/partenaires' => [[['_route' => 'partenaires', '_controller' => 'App\\Controller\\PartenairesController::index'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'servicesapp_services_index', '_controller' => 'App\\Controller\\ServicesController::index'], null, null, null, true, false, null]],
        '/services/internet' => [[['_route' => 'servicesapp_services_internet', '_controller' => 'App\\Controller\\ServicesController::internet'], null, null, null, false, false, null]],
        '/services/apndedier' => [[['_route' => 'servicesapp_services_apndedier', '_controller' => 'App\\Controller\\ServicesController::apndedier'], null, null, null, false, false, null]],
        '/services/intranet' => [[['_route' => 'servicesapp_services_intranet', '_controller' => 'App\\Controller\\ServicesController::intranet'], null, null, null, false, false, null]],
        '/services/mpls' => [[['_route' => 'servicesapp_services_mpls', '_controller' => 'App\\Controller\\ServicesController::mpls'], null, null, null, false, false, null]],
        '/services/pabx' => [[['_route' => 'servicesapp_services_pabx', '_controller' => 'App\\Controller\\ServicesController::pabx'], null, null, null, false, false, null]],
        '/services/vsat' => [[['_route' => 'servicesapp_services_vsat', '_controller' => 'App\\Controller\\ServicesController::vsat'], null, null, null, false, false, null]],
        '/services/drc' => [[['_route' => 'servicesapp_services_drc', '_controller' => 'App\\Controller\\ServicesController::drc'], null, null, null, false, false, null]],
        '/solutions' => [[['_route' => 'solutions', '_controller' => 'App\\Controller\\SolutionsController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
