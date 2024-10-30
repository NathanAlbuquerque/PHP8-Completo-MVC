<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('app\Controllers');

SimpleRouter::get('/', 'HomeController@index');
SimpleRouter::get('/about-us', 'HomeController@about');
SimpleRouter::get('/contact', 'HomeController@contact');
SimpleRouter::get('/403', 'HomeController@forbidden');
SimpleRouter::get('/404', 'HomeController@notFound');
SimpleRouter::get('/error', 'HomeController@error');
SimpleRouter::error(function(Request $r, Exception $e) {
    switch ($e->getCode()) {
        case '403':
            SimpleRouter::response()->redirect('/403');
            break;
        case '404':
            SimpleRouter::response()->redirect('/404');
            break;
        default:
            SimpleRouter::response()->redirect('/error');
            break;
    }
});

SimpleRouter::start();