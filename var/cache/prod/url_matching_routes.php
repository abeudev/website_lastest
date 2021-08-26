<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
