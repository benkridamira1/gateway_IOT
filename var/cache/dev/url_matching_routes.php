<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/addGateway' => [[['_route' => 'add_gateway', '_controller' => 'App\\Controller\\GatewayController::addGateway'], null, ['POST' => 0], null, false, false, null]],
        '/getGateway' => [[['_route' => 'get_gateway', '_controller' => 'App\\Controller\\GatewayController::getGateway'], null, ['GET' => 0], null, false, false, null]],
        '/deleteGateway' => [[['_route' => 'delete_gateway', '_controller' => 'App\\Controller\\GatewayController::delete'], null, ['DELETE' => 0], null, false, false, null]],
        '/updateGateway' => [[['_route' => 'update_gateway', '_controller' => 'App\\Controller\\GatewayController::updateMeter'], null, ['PUT' => 0], null, false, false, null]],
        '/test' => [[['_route' => 'tets', '_controller' => 'App\\Controller\\JobController::index'], null, ['GET' => 0], null, false, false, null]],
        '/addJob' => [[['_route' => 'add_job', '_controller' => 'App\\Controller\\JobController::addJob'], null, ['POST' => 0], null, false, false, null]],
        '/JobList' => [[['_route' => 'JobList', '_controller' => 'App\\Controller\\JobController::ListJob'], null, ['GET' => 0], null, false, false, null]],
        '/addMeter' => [[['_route' => 'add_meter', '_controller' => 'App\\Controller\\MeterController::addMeter'], null, ['POST' => 0], null, false, false, null]],
        '/getAllMeters' => [[['_route' => 'get_all_meter', '_controller' => 'App\\Controller\\MeterController::getAllMeters'], null, ['GET' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/login' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/get(?'
                    .'|Job/([^/]++)(*:26)'
                    .'|Meter/([^/]++)(*:47)'
                .')'
                .'|/UpdateJob/([^/]++)(*:74)'
                .'|/DeleteJob/([^/]++)(*:100)'
                .'|/deleteMeter/([^/]++)(*:129)'
                .'|/updateMeter/([^/]++)(*:158)'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:201)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:232)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:268)'
                        .'|users(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:302)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:340)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:383)'
                    .'|wdt/([^/]++)(*:403)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:449)'
                            .'|router(*:463)'
                            .'|exception(?'
                                .'|(*:483)'
                                .'|\\.css(*:496)'
                            .')'
                        .')'
                        .'|(*:506)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'getJob', '_controller' => 'App\\Controller\\JobController::getJob'], ['name'], ['GET' => 0], null, false, true, null]],
        47 => [[['_route' => 'get_one_meter', '_controller' => 'App\\Controller\\MeterController::getMeter'], ['id'], ['GET' => 0], null, false, true, null]],
        74 => [[['_route' => 'UpdateJob', '_controller' => 'App\\Controller\\JobController::UpdateJob'], ['name'], ['PUT' => 0], null, false, true, null]],
        100 => [[['_route' => 'DeleteJob', '_controller' => 'App\\Controller\\JobController::DeleteJob'], ['name'], ['DELETE' => 0], null, false, true, null]],
        129 => [[['_route' => 'delete_meter', '_controller' => 'App\\Controller\\MeterController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        158 => [[['_route' => 'update_meter', '_controller' => 'App\\Controller\\MeterController::updateMeter'], ['id'], ['PUT' => 0], null, false, true, null]],
        201 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        232 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        268 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        302 => [
            [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        340 => [
            [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_users_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        383 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        403 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        449 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        463 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        483 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        496 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        506 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
