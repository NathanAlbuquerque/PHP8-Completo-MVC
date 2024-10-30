<?php

namespace app\Controllers;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct('resources/views');
    }

    public function index(): void {
        echo $this->template->render('home.php', ['title' => 'Home']);
    }

    public function about(): void {
        echo $this->template->render('about.php', ['title' => 'About']);
    }

    public function contact(): void {
        echo $this->template->render('contact.php', ['title' => 'Contact']);
    }

    public function forbidden(): void {
        echo $this->template->render('403.php', ['title' => 'Forbidden (403)']);
    }

    public function notFound(): void {
        echo $this->template->render('404.php', ['title' => 'Not Found (404)']);
    }

    public function error(): void {
        echo $this->template->render('error.php', ['title' => 'Error']);
    }
}