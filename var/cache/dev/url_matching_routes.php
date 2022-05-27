<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/product/create' => [[['_route' => 'app_admin_product_create', '_controller' => 'App\\Controller\\AdminController::adminProductCreate'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/add' => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], null, null, null, false, false, null]],
        '/cart/delete' => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::delete'], null, null, null, false, false, null]],
        '/cartdb' => [[['_route' => 'app_cartdb_index', '_controller' => 'App\\Controller\\CartdbController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cartdb/new' => [[['_route' => 'app_cartdb_new', '_controller' => 'App\\Controller\\CartdbController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/email' => [[['_route' => 'app_mailer', '_controller' => 'App\\Controller\\MailerController::sendEmail'], null, null, null, false, false, null]],
        '/products' => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/nouveautes' => [[['_route' => 'app_nouveautes', '_controller' => 'App\\Controller\\ProductController::showNewProducts'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/product/(?'
                    .'|edit/([^/]++)(*:38)'
                    .'|delete/([^/]++)(*:60)'
                .')'
                .'|/cartdb/([^/]++)(?'
                    .'|(*:87)'
                    .'|/edit(*:99)'
                    .'|(*:106)'
                .')'
                .'|/product/(\\d+)(*:129)'
                .'|/research/([^/]++)(*:155)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:194)'
                    .'|wdt/([^/]++)(*:214)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:260)'
                            .'|router(*:274)'
                            .'|exception(?'
                                .'|(*:294)'
                                .'|\\.css(*:307)'
                            .')'
                        .')'
                        .'|(*:317)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'app_admin_product_edit', '_controller' => 'App\\Controller\\AdminController::adminProductEdit'], ['id'], null, null, false, true, null]],
        60 => [[['_route' => 'app_admin_product_delete', '_controller' => 'App\\Controller\\AdminController::adminProductDelete'], ['id'], null, null, false, true, null]],
        87 => [[['_route' => 'app_cartdb_show', '_controller' => 'App\\Controller\\CartdbController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        99 => [[['_route' => 'app_cartdb_edit', '_controller' => 'App\\Controller\\CartdbController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        106 => [[['_route' => 'app_cartdb_delete', '_controller' => 'App\\Controller\\CartdbController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        129 => [[['_route' => 'app_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        155 => [[['_route' => 'app_research', '_controller' => 'App\\Controller\\ProductController::research'], ['research'], null, null, false, true, null]],
        194 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        214 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        260 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        274 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        294 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        307 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        317 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
