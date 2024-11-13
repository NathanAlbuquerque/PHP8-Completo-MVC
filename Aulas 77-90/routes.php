<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\SimpleRouter as Router;

Router::setDefaultNamespace('app\Controllers');

Router::get('/', 'HomeController@home');
Router::get('/about', 'HomeController@about');
Router::get('/contact', 'HomeController@contact');
Router::get('/post/{slug}', 'HomeController@post');
Router::get('/category/{id}', 'HomeController@category');
Router::get('/search-php', 'HomeController@searchPHPGet');
Router::post('/search-php', 'HomeController@searchPHPPost');
Router::get('/search-jquery-ajax', 'HomeController@searchJQueryAjaxGet');
Router::post('/search-jquery-ajax', 'HomeController@searchJQueryAjaxPost');

Router::group(['namespace' => 'Admin'], function () {
    Router::get('/admin', 'AdminController@index');
    Router::get('/dashboard', 'AdminController@index');

    Router::get('/admin/posts/index', 'PostController@index');
    Router::get('/admin/posts/create', 'PostController@create');
    Router::post('/admin/posts/store', 'PostController@store');
    Router::get('/admin/posts/edit/{slug}', 'PostController@edit');
    Router::post('/admin/posts/update/{slug}', 'PostController@update');
    Router::get('/admin/posts/delete/{slug}', 'PostController@delete');

    Router::get('/admin/categories/index', 'CategoryController@index');
    Router::get('/admin/categories/create', 'CategoryController@create');
    Router::post('/admin/categories/store', 'CategoryController@store');
    Router::get('/admin/categories/edit/{slug}', 'CategoryController@edit');
    Router::post('/admin/categories/update/{slug}', 'CategoryController@update');
    Router::get('/admin/categories/delete/{slug}', 'CategoryController@delete');
});

// Router::get('/forbidden-403', 'HomeController@forbidden');
// Router::get('/not-found-404', 'HomeController@notFound');
// Router::get('/error-system', 'HomeController@errorSystem');

// Router::error(function (Request $r, Exception $e) {
//     switch ($e->getCode()) {
//         case 403:
//             Router::response()->redirect('forbidden-403');
//             break;
//         case 404:
//             Router::response()->redirect('not-found-404');
//             break;
//         default:
//             break;
//     }
// });

Router::start();