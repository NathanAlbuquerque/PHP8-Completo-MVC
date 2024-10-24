<?php

namespace app\Controllers;

class SiteController extends Controller
{
    public function __construct()
    {
        parent::__construct('views');
    }

    public function index(): void {
        echo $this->template->render('index.html', ['title' => APP_NAME]);
    }
}