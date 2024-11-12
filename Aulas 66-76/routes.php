<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\SimpleRouter as Router;

Router::setDefaultNamespace('app\Controllers');

Router::get('/', 'HomeController@home');
Router::get('/about', 'HomeController@about');
Router::get('/contact', 'HomeController@contact');
Router::get('/post/{slug}', 'HomeController@post');
Router::get('/category/{id}', 'HomeController@category');

Router::get('/forbidden-403', 'HomeController@forbidden');
Router::get('/not-found-404', 'HomeController@notFound');
Router::get('/error-system', 'HomeController@errorSystem');

Router::error(function (Request $r, Exception $e) {
    switch ($e->getCode()) {
        case 403:
            Router::response()->redirect('forbidden-403');
            break;
        case 404:
            Router::response()->redirect('not-found-404');
            break;
        default:
            break;
    }
});

Router::start();