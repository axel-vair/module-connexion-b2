<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'index.blog' => [[], ['_controller' => 'App\\Controller\\BlogController::index'], [], [['text', '/blog']], [], [], []],
    'show.article' => [['slug'], ['_controller' => 'App\\Controller\\BlogController::article'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/article']], [], [], []],
    'home.index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'ingredient.index' => [[], ['_controller' => 'App\\Controller\\IngredientController::index'], [], [['text', '/ingredient']], [], [], []],
    'ingredient.new' => [[], ['_controller' => 'App\\Controller\\IngredientController::new'], [], [['text', '/ingredient/nouveau']], [], [], []],
    'ingredient.edit' => [['id'], ['_controller' => 'App\\Controller\\IngredientController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ingredient/edition']], [], [], []],
    'ingredient.delete' => [['id'], ['_controller' => 'App\\Controller\\IngredientController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ingredient/suppression']], [], [], []],
    'recipe.index' => [[], ['_controller' => 'App\\Controller\\RecipeController::index'], [], [['text', '/recette']], [], [], []],
    'recipe.index.public' => [[], ['_controller' => 'App\\Controller\\RecipeController::indexPublic'], [], [['text', '/recette/publique']], [], [], []],
    'recipe.new' => [[], ['_controller' => 'App\\Controller\\RecipeController::new'], [], [['text', '/recette/creation']], [], [], []],
    'recipe.edit' => [['id'], ['_controller' => 'App\\Controller\\RecipeController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/recette/edition']], [], [], []],
    'recipe.delete' => [['id'], ['_controller' => 'App\\Controller\\RecipeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/recette/suppression']], [], [], []],
    'recipe.show' => [['id'], ['_controller' => 'App\\Controller\\RecipeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/recette']], [], [], []],
    'security.login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'security.logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], [], []],
    'security.registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/inscription']], [], [], []],
    'user.edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur/edition']], [], [], []],
    'user.edit.password' => [['id'], ['_controller' => 'App\\Controller\\UserController::editPassword'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur/edition/mot-de-passe']], [], [], []],
];
