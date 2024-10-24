<?php

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('app\Controllers');

SimpleRouter::get('/', 'SiteController@index');

SimpleRouter::start();