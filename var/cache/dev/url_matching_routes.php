<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/post' => [[['_route' => 'app_admin_post_index', '_controller' => 'App\\Controller\\AdminPostController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/post/new' => [[['_route' => 'app_admin_post_new', '_controller' => 'App\\Controller\\AdminPostController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/User' => [[['_route' => 'app_admin_user_index', '_controller' => 'App\\Controller\\AdminUserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/User/new' => [[['_route' => 'app_admin_user_new', '_controller' => 'App\\Controller\\AdminUserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home_page', '_controller' => 'App\\Controller\\HomePageController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/admin/(?'
                    .'|post/([^/]++)(?'
                        .'|(*:68)'
                        .'|/edit(*:80)'
                        .'|(*:87)'
                    .')'
                    .'|User/([^/]++)(?'
                        .'|(*:111)'
                        .'|/edit(*:124)'
                        .'|(*:132)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:178)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        68 => [[['_route' => 'app_admin_post_show', '_controller' => 'App\\Controller\\AdminPostController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        80 => [[['_route' => 'app_admin_post_edit', '_controller' => 'App\\Controller\\AdminPostController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        87 => [[['_route' => 'app_admin_post_delete', '_controller' => 'App\\Controller\\AdminPostController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        111 => [[['_route' => 'app_admin_user_show', '_controller' => 'App\\Controller\\AdminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        124 => [[['_route' => 'app_admin_user_edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        132 => [[['_route' => 'app_admin_user_delete', '_controller' => 'App\\Controller\\AdminUserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        178 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
