<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/livreurs/register' => [[['_route' => 'api_livreurs_registration_collection', '_controller' => 'App\\Controller\\RegistrationsController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livreur', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'registration'], null, ['POST' => 0], null, false, false, null]],
        '/api/users/register' => [[['_route' => 'api_users_registration_collection', '_controller' => 'App\\Controller\\RegistrationsController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'registration'], null, ['POST' => 0], null, false, false, null]],
        '/api/clients/register' => [[['_route' => 'api_clients_registration_collection', '_controller' => 'App\\Controller\\RegistrationsController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'registration'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'api_login'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:42)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:72)'
                        .'|c(?'
                            .'|o(?'
                                .'|ntexts/(.+)(?:\\.([^/]++))?(*:113)'
                                .'|m(?'
                                    .'|plements/([^/]++)(?'
                                        .'|(*:145)'
                                        .'|/(?'
                                            .'|portion_frites(?:\\.([^/]++))?(*:186)'
                                            .'|boissons(?'
                                                .'|(?:\\.([^/]++))?(*:220)'
                                                .'|/([^/]++)/boisson_tailles(?:\\.([^/]++))?(*:268)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|mande(?'
                                        .'|_(?'
                                            .'|b(?'
                                                .'|urgers(?'
                                                    .'|(?:\\.([^/]++))?(?'
                                                        .'|(*:322)'
                                                    .')'
                                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                        .'|(*:360)'
                                                    .')'
                                                .')'
                                                .'|oisson_tailles(?'
                                                    .'|(?:\\.([^/]++))?(?'
                                                        .'|(*:405)'
                                                    .')'
                                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                        .'|(*:443)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|portion_frites(?'
                                                .'|(?:\\.([^/]++))?(?'
                                                    .'|(*:489)'
                                                .')'
                                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                    .'|(*:527)'
                                                .')'
                                            .')'
                                            .'|menu(?'
                                                .'|_boisson_tailles(?'
                                                    .'|(?:\\.([^/]++))?(?'
                                                        .'|(*:581)'
                                                    .')'
                                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                        .'|(*:619)'
                                                    .')'
                                                .')'
                                                .'|s(?'
                                                    .'|(?:\\.([^/]++))?(?'
                                                        .'|(*:651)'
                                                    .')'
                                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                        .'|(*:689)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|s(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:723)'
                                            .')'
                                            .'|/(?'
                                                .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                    .'|(*:764)'
                                                .')'
                                                .'|([^/]++)/commande_(?'
                                                    .'|b(?'
                                                        .'|oisson_tailles(?:\\.([^/]++))?(*:827)'
                                                        .'|urgers(?:\\.([^/]++))?(*:856)'
                                                    .')'
                                                    .'|menuses(?:\\.([^/]++))?(*:887)'
                                                    .'|portion_frites(?:\\.([^/]++))?(*:924)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|lients(?'
                                .'|(?:\\.([^/]++))?(*:962)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:999)'
                                .')'
                            .')'
                            .'|atalogues/([^/]++)(?'
                                .'|(*:1030)'
                                .'|/(?'
                                    .'|burgers(?:\\.([^/]++))?(*:1065)'
                                    .'|menuses(?'
                                        .'|(?:\\.([^/]++))?(*:1099)'
                                        .'|/([^/]++)/menu_(?'
                                            .'|burgers(?:\\.([^/]++))?(*:1148)'
                                            .'|tailles(?:\\.([^/]++))?(*:1179)'
                                            .'|portion_frites(?:\\.([^/]++))?(*:1217)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|menu(?'
                            .'|_(?'
                                .'|tailles(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1270)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1309)'
                                    .')'
                                .')'
                                .'|burgers(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1348)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1387)'
                                    .')'
                                .')'
                                .'|portion_frites(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1433)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1472)'
                                    .')'
                                .')'
                            .')'
                            .'|s(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1506)'
                                .')'
                                .'|/(?'
                                    .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1548)'
                                    .')'
                                    .'|([^/]++)/menu_(?'
                                        .'|burgers(?:\\.([^/]++))?(*:1597)'
                                        .'|tailles(?:\\.([^/]++))?(*:1628)'
                                        .'|portion_frites(?:\\.([^/]++))?(*:1666)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|livr(?'
                            .'|eurs(?'
                                .'|(?:\\.([^/]++))?(*:1708)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1746)'
                                .')'
                            .')'
                            .'|aisons(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1784)'
                                .')'
                                .'|/(?'
                                    .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1826)'
                                    .')'
                                    .'|([^/]++)/commandes(?'
                                        .'|(?:\\.([^/]++))?(*:1872)'
                                        .'|/([^/]++)/commande_(?'
                                            .'|b(?'
                                                .'|oisson_tailles(?:\\.([^/]++))?(*:1936)'
                                                .'|urgers(?:\\.([^/]++))?(*:1966)'
                                            .')'
                                            .'|menuses(?:\\.([^/]++))?(*:1998)'
                                            .'|portion_frites(?:\\.([^/]++))?(*:2036)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|users(?'
                            .'|(?:\\.([^/]++))?(*:2073)'
                            .'|/(?'
                                .'|([^/]++)/activate(*:2103)'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:2140)'
                                .')'
                            .')'
                        .')'
                        .'|b(?'
                            .'|urgers(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:2183)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:2222)'
                                .')'
                            .')'
                            .'|oisson(?'
                                .'|_tailles(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:2271)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:2310)'
                                    .')'
                                .')'
                                .'|s(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:2343)'
                                    .')'
                                    .'|/(?'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:2385)'
                                        .')'
                                        .'|([^/]++)/boisson_tailles(?:\\.([^/]++))?(*:2434)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|zones(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:2473)'
                            .')'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:2515)'
                                .')'
                                .'|([^/]++)/quartiers(?:\\.([^/]++))?(*:2558)'
                            .')'
                        .')'
                        .'|portion_frites(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:2604)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:2643)'
                            .')'
                        .')'
                        .'|quartiers(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:2684)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:2723)'
                            .')'
                        .')'
                        .'|tailles(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:2762)'
                            .')'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:2804)'
                                .')'
                                .'|([^/]++)/boisson_tailles(?:\\.([^/]++))?(*:2853)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:2894)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        42 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        72 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        113 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        145 => [[['_route' => 'api_complements_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Complement', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null]],
        186 => [[['_route' => 'api_complements_portion_frites_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\PortionFrites', '_api_identifiers' => ['id' => ['App\\Entity\\Complement', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_complements_portion_frites_get_subresource', '_api_subresource_context' => ['property' => 'portionFrites', 'identifiers' => ['id' => ['App\\Entity\\Complement', 'id', true]], 'collection' => true, 'operationId' => 'api_complements_portion_frites_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        220 => [[['_route' => 'api_complements_boissons_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Boisson', '_api_identifiers' => ['id' => ['App\\Entity\\Complement', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_complements_boissons_get_subresource', '_api_subresource_context' => ['property' => 'boissons', 'identifiers' => ['id' => ['App\\Entity\\Complement', 'id', true]], 'collection' => true, 'operationId' => 'api_complements_boissons_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        268 => [[['_route' => 'api_complements_boissons_boisson_tailles_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\BoissonTaille', '_api_identifiers' => ['id' => ['App\\Entity\\Complement', 'id', true], 'boissons' => ['App\\Entity\\Boisson', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_complements_boissons_boisson_tailles_get_subresource', '_api_subresource_context' => ['property' => 'boissonTailles', 'identifiers' => ['id' => ['App\\Entity\\Complement', 'id', true], 'boissons' => ['App\\Entity\\Boisson', 'id', true]], 'collection' => true, 'operationId' => 'api_complements_boissons_boisson_tailles_get_subresource']], ['id', 'boissons', '_format'], ['GET' => 0], null, false, true, null]],
        322 => [
            [['_route' => 'api_commande_burgers_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeBurger', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_commande_burgers_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeBurger', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        360 => [
            [['_route' => 'api_commande_burgers_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeBurger', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_commande_burgers_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeBurger', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_commande_burgers_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeBurger', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_commande_burgers_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeBurger', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        405 => [
            [['_route' => 'api_commande_boisson_tailles_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeBoissonTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_commande_boisson_tailles_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeBoissonTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        443 => [
            [['_route' => 'api_commande_boisson_tailles_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeBoissonTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_commande_boisson_tailles_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeBoissonTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_commande_boisson_tailles_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeBoissonTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_commande_boisson_tailles_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeBoissonTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        489 => [
            [['_route' => 'api_commande_portion_frites_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandePortionFrites', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_commande_portion_frites_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandePortionFrites', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        527 => [
            [['_route' => 'api_commande_portion_frites_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandePortionFrites', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_commande_portion_frites_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandePortionFrites', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_commande_portion_frites_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandePortionFrites', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_commande_portion_frites_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandePortionFrites', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        581 => [
            [['_route' => 'api_commande_menu_boisson_tailles_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeMenuBoissonTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_commande_menu_boisson_tailles_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeMenuBoissonTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        619 => [
            [['_route' => 'api_commande_menu_boisson_tailles_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeMenuBoissonTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_commande_menu_boisson_tailles_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeMenuBoissonTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_commande_menu_boisson_tailles_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeMenuBoissonTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_commande_menu_boisson_tailles_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeMenuBoissonTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        651 => [
            [['_route' => 'api_commande_menus_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeMenu', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_commande_menus_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeMenu', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        689 => [
            [['_route' => 'api_commande_menus_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeMenu', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_commande_menus_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeMenu', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_commande_menus_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeMenu', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_commande_menus_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeMenu', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        723 => [
            [['_route' => 'api_commandes_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commande', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_commandes_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commande', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        764 => [
            [['_route' => 'api_commandes_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commande', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_commandes_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commande', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        827 => [[['_route' => 'api_commandes_commande_boisson_tailles_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeBoissonTaille', '_api_identifiers' => ['id' => ['App\\Entity\\Commande', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_commandes_commande_boisson_tailles_get_subresource', '_api_subresource_context' => ['property' => 'commandeBoissonTailles', 'identifiers' => ['id' => ['App\\Entity\\Commande', 'id', true]], 'collection' => true, 'operationId' => 'api_commandes_commande_boisson_tailles_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        856 => [[['_route' => 'api_commandes_commande_burgers_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeBurger', '_api_identifiers' => ['id' => ['App\\Entity\\Commande', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_commandes_commande_burgers_get_subresource', '_api_subresource_context' => ['property' => 'commandeBurgers', 'identifiers' => ['id' => ['App\\Entity\\Commande', 'id', true]], 'collection' => true, 'operationId' => 'api_commandes_commande_burgers_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        887 => [[['_route' => 'api_commandes_commande_menuses_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeMenu', '_api_identifiers' => ['id' => ['App\\Entity\\Commande', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_commandes_commande_menuses_get_subresource', '_api_subresource_context' => ['property' => 'commandeMenus', 'identifiers' => ['id' => ['App\\Entity\\Commande', 'id', true]], 'collection' => true, 'operationId' => 'api_commandes_commande_menuses_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        924 => [[['_route' => 'api_commandes_commande_portion_frites_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandePortionFrites', '_api_identifiers' => ['id' => ['App\\Entity\\Commande', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_commandes_commande_portion_frites_get_subresource', '_api_subresource_context' => ['property' => 'commandePortionFrites', 'identifiers' => ['id' => ['App\\Entity\\Commande', 'id', true]], 'collection' => true, 'operationId' => 'api_commandes_commande_portion_frites_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        962 => [[['_route' => 'api_clients_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        999 => [
            [['_route' => 'api_clients_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_clients_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        1030 => [[['_route' => 'api_catalogues_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Catalogue', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null]],
        1065 => [[['_route' => 'api_catalogues_burgers_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Burger', '_api_identifiers' => ['id' => ['App\\Entity\\Catalogue', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_catalogues_burgers_get_subresource', '_api_subresource_context' => ['property' => 'burgers', 'identifiers' => ['id' => ['App\\Entity\\Catalogue', 'id', true]], 'collection' => true, 'operationId' => 'api_catalogues_burgers_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1099 => [[['_route' => 'api_catalogues_menuses_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Menu', '_api_identifiers' => ['id' => ['App\\Entity\\Catalogue', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_catalogues_menuses_get_subresource', '_api_subresource_context' => ['property' => 'menus', 'identifiers' => ['id' => ['App\\Entity\\Catalogue', 'id', true]], 'collection' => true, 'operationId' => 'api_catalogues_menuses_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1148 => [[['_route' => 'api_catalogues_menuses_menu_burgers_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuBurger', '_api_identifiers' => ['id' => ['App\\Entity\\Catalogue', 'id', true], 'menus' => ['App\\Entity\\Menu', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_catalogues_menuses_menu_burgers_get_subresource', '_api_subresource_context' => ['property' => 'menuBurgers', 'identifiers' => ['id' => ['App\\Entity\\Catalogue', 'id', true], 'menus' => ['App\\Entity\\Menu', 'id', true]], 'collection' => true, 'operationId' => 'api_catalogues_menuses_menu_burgers_get_subresource']], ['id', 'menus', '_format'], ['GET' => 0], null, false, true, null]],
        1179 => [[['_route' => 'api_catalogues_menuses_menu_tailles_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuTaille', '_api_identifiers' => ['id' => ['App\\Entity\\Catalogue', 'id', true], 'menus' => ['App\\Entity\\Menu', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_catalogues_menuses_menu_tailles_get_subresource', '_api_subresource_context' => ['property' => 'menuTailles', 'identifiers' => ['id' => ['App\\Entity\\Catalogue', 'id', true], 'menus' => ['App\\Entity\\Menu', 'id', true]], 'collection' => true, 'operationId' => 'api_catalogues_menuses_menu_tailles_get_subresource']], ['id', 'menus', '_format'], ['GET' => 0], null, false, true, null]],
        1217 => [[['_route' => 'api_catalogues_menuses_menu_portion_frites_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuPortionFrites', '_api_identifiers' => ['id' => ['App\\Entity\\Catalogue', 'id', true], 'menus' => ['App\\Entity\\Menu', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_catalogues_menuses_menu_portion_frites_get_subresource', '_api_subresource_context' => ['property' => 'menuPortionFrites', 'identifiers' => ['id' => ['App\\Entity\\Catalogue', 'id', true], 'menus' => ['App\\Entity\\Menu', 'id', true]], 'collection' => true, 'operationId' => 'api_catalogues_menuses_menu_portion_frites_get_subresource']], ['id', 'menus', '_format'], ['GET' => 0], null, false, true, null]],
        1270 => [
            [['_route' => 'api_menu_tailles_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_menu_tailles_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1309 => [
            [['_route' => 'api_menu_tailles_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_menu_tailles_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_menu_tailles_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_menu_tailles_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1348 => [
            [['_route' => 'api_menu_burgers_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuBurger', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_menu_burgers_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuBurger', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1387 => [
            [['_route' => 'api_menu_burgers_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuBurger', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_menu_burgers_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuBurger', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_menu_burgers_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuBurger', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_menu_burgers_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuBurger', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1433 => [
            [['_route' => 'api_menu_portion_frites_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuPortionFrites', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_menu_portion_frites_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuPortionFrites', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1472 => [
            [['_route' => 'api_menu_portion_frites_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuPortionFrites', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_menu_portion_frites_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuPortionFrites', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_menu_portion_frites_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuPortionFrites', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_menu_portion_frites_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuPortionFrites', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1506 => [
            [['_route' => 'api_menus_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Menu', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_menus_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Menu', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        1548 => [
            [['_route' => 'api_menus_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Menu', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_menus_put_item', '_controller' => 'App\\Controller\\EditProduitAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Menu', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_menus_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Menu', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1597 => [[['_route' => 'api_menus_menu_burgers_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuBurger', '_api_identifiers' => ['id' => ['App\\Entity\\Menu', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_menus_menu_burgers_get_subresource', '_api_subresource_context' => ['property' => 'menuBurgers', 'identifiers' => ['id' => ['App\\Entity\\Menu', 'id', true]], 'collection' => true, 'operationId' => 'api_menus_menu_burgers_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1628 => [[['_route' => 'api_menus_menu_tailles_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuTaille', '_api_identifiers' => ['id' => ['App\\Entity\\Menu', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_menus_menu_tailles_get_subresource', '_api_subresource_context' => ['property' => 'menuTailles', 'identifiers' => ['id' => ['App\\Entity\\Menu', 'id', true]], 'collection' => true, 'operationId' => 'api_menus_menu_tailles_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1666 => [[['_route' => 'api_menus_menu_portion_frites_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\MenuPortionFrites', '_api_identifiers' => ['id' => ['App\\Entity\\Menu', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_menus_menu_portion_frites_get_subresource', '_api_subresource_context' => ['property' => 'menuPortionFrites', 'identifiers' => ['id' => ['App\\Entity\\Menu', 'id', true]], 'collection' => true, 'operationId' => 'api_menus_menu_portion_frites_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1708 => [[['_route' => 'api_livreurs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livreur', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        1746 => [
            [['_route' => 'api_livreurs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livreur', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livreurs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livreur', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        1784 => [
            [['_route' => 'api_livraisons_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livraison', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_livraisons_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livraison', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        1826 => [
            [['_route' => 'api_livraisons_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livraison', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livraisons_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livraison', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_livraisons_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livraison', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        1872 => [[['_route' => 'api_livraisons_commandes_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commande', '_api_identifiers' => ['id' => ['App\\Entity\\Livraison', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_livraisons_commandes_get_subresource', '_api_subresource_context' => ['property' => 'commandes', 'identifiers' => ['id' => ['App\\Entity\\Livraison', 'id', true]], 'collection' => true, 'operationId' => 'api_livraisons_commandes_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1936 => [[['_route' => 'api_livraisons_commandes_commande_boisson_tailles_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeBoissonTaille', '_api_identifiers' => ['id' => ['App\\Entity\\Livraison', 'id', true], 'commandes' => ['App\\Entity\\Commande', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_livraisons_commandes_commande_boisson_tailles_get_subresource', '_api_subresource_context' => ['property' => 'commandeBoissonTailles', 'identifiers' => ['id' => ['App\\Entity\\Livraison', 'id', true], 'commandes' => ['App\\Entity\\Commande', 'id', true]], 'collection' => true, 'operationId' => 'api_livraisons_commandes_commande_boisson_tailles_get_subresource']], ['id', 'commandes', '_format'], ['GET' => 0], null, false, true, null]],
        1966 => [[['_route' => 'api_livraisons_commandes_commande_burgers_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeBurger', '_api_identifiers' => ['id' => ['App\\Entity\\Livraison', 'id', true], 'commandes' => ['App\\Entity\\Commande', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_livraisons_commandes_commande_burgers_get_subresource', '_api_subresource_context' => ['property' => 'commandeBurgers', 'identifiers' => ['id' => ['App\\Entity\\Livraison', 'id', true], 'commandes' => ['App\\Entity\\Commande', 'id', true]], 'collection' => true, 'operationId' => 'api_livraisons_commandes_commande_burgers_get_subresource']], ['id', 'commandes', '_format'], ['GET' => 0], null, false, true, null]],
        1998 => [[['_route' => 'api_livraisons_commandes_commande_menuses_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandeMenu', '_api_identifiers' => ['id' => ['App\\Entity\\Livraison', 'id', true], 'commandes' => ['App\\Entity\\Commande', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_livraisons_commandes_commande_menuses_get_subresource', '_api_subresource_context' => ['property' => 'commandeMenus', 'identifiers' => ['id' => ['App\\Entity\\Livraison', 'id', true], 'commandes' => ['App\\Entity\\Commande', 'id', true]], 'collection' => true, 'operationId' => 'api_livraisons_commandes_commande_menuses_get_subresource']], ['id', 'commandes', '_format'], ['GET' => 0], null, false, true, null]],
        2036 => [[['_route' => 'api_livraisons_commandes_commande_portion_frites_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\CommandePortionFrites', '_api_identifiers' => ['id' => ['App\\Entity\\Livraison', 'id', true], 'commandes' => ['App\\Entity\\Commande', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_livraisons_commandes_commande_portion_frites_get_subresource', '_api_subresource_context' => ['property' => 'commandePortionFrites', 'identifiers' => ['id' => ['App\\Entity\\Livraison', 'id', true], 'commandes' => ['App\\Entity\\Commande', 'id', true]], 'collection' => true, 'operationId' => 'api_livraisons_commandes_commande_portion_frites_get_subresource']], ['id', 'commandes', '_format'], ['GET' => 0], null, false, true, null]],
        2073 => [[['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        2103 => [[['_route' => 'api_users_verify_mail_collection', '_controller' => 'App\\Controller\\VerifyEmailAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'verify_mail'], ['token'], ['PATCH' => 0], null, false, false, null]],
        2140 => [
            [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        2183 => [
            [['_route' => 'api_burgers_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Burger', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_burgers_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Burger', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        2222 => [
            [['_route' => 'api_burgers_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Burger', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_burgers_put_item', '_controller' => 'App\\Controller\\EditProduitAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Burger', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_burgers_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Burger', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        2271 => [
            [['_route' => 'api_boisson_tailles_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\BoissonTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_boisson_tailles_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\BoissonTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2310 => [
            [['_route' => 'api_boisson_tailles_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\BoissonTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_boisson_tailles_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\BoissonTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_boisson_tailles_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\BoissonTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_boisson_tailles_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\BoissonTaille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        2343 => [
            [['_route' => 'api_boissons_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Boisson', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_boissons_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Boisson', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        2385 => [
            [['_route' => 'api_boissons_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Boisson', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_boissons_put_item', '_controller' => 'App\\Controller\\EditProduitAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Boisson', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_boissons_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Boisson', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        2434 => [[['_route' => 'api_boissons_boisson_tailles_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\BoissonTaille', '_api_identifiers' => ['id' => ['App\\Entity\\Boisson', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_boissons_boisson_tailles_get_subresource', '_api_subresource_context' => ['property' => 'boissonTailles', 'identifiers' => ['id' => ['App\\Entity\\Boisson', 'id', true]], 'collection' => true, 'operationId' => 'api_boissons_boisson_tailles_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2473 => [
            [['_route' => 'api_zones_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Zone', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_zones_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Zone', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        2515 => [
            [['_route' => 'api_zones_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Zone', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_zones_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Zone', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_zones_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Zone', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        2558 => [[['_route' => 'api_zones_quartiers_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Quartier', '_api_identifiers' => ['id' => ['App\\Entity\\Zone', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_zones_quartiers_get_subresource', '_api_subresource_context' => ['property' => 'quartiers', 'identifiers' => ['id' => ['App\\Entity\\Zone', 'id', true]], 'collection' => true, 'operationId' => 'api_zones_quartiers_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2604 => [
            [['_route' => 'api_portion_frites_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\PortionFrites', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_portion_frites_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\PortionFrites', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        2643 => [
            [['_route' => 'api_portion_frites_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\PortionFrites', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_portion_frites_put_item', '_controller' => 'App\\Controller\\EditProduitAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\PortionFrites', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_portion_frites_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\PortionFrites', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        2684 => [
            [['_route' => 'api_quartiers_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Quartier', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_quartiers_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Quartier', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        2723 => [
            [['_route' => 'api_quartiers_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Quartier', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_quartiers_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Quartier', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_quartiers_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Quartier', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        2762 => [
            [['_route' => 'api_tailles_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_tailles_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        2804 => [
            [['_route' => 'api_tailles_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tailles_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_tailles_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taille', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        2853 => [[['_route' => 'api_tailles_boisson_tailles_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\BoissonTaille', '_api_identifiers' => ['id' => ['App\\Entity\\Taille', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_tailles_boisson_tailles_get_subresource', '_api_subresource_context' => ['property' => 'boissonTailles', 'identifiers' => ['id' => ['App\\Entity\\Taille', 'id', true]], 'collection' => true, 'operationId' => 'api_tailles_boisson_tailles_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2894 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
