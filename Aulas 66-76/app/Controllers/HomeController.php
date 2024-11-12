<?php

namespace app\Controllers;

use app\Models\Category;
use app\Models\Post;

/**
 * @author Nathan Albuquerque <nathan.nra@outlook.com>
 * @copyright Copyright 2024, Isi
 */
class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct('resources/views');
    }

    public function home(): void
    {
        $posts = (new Post)->all();
        echo $this->template->render('home', [
            'title' => 'Home',
            'posts' => $posts,
            'categories' => (new Category)->all()
        ]);
    }

    public function about(): void
    {
        echo $this->template->render('about', ['title' => 'About']);
    }

    public function contact(): void
    {
        echo $this->template->render('contact', ['title' => 'Contact']);
    }

    public function post(string $slug): void
    {
        $post = (new Post)->find('slug', $slug);
        $categories = (new Category)->all();
        // var_dump($post);
        // die();
        if (!$post) {
            $this->notFound();
            return;
        }
        echo $this->template->render('post', [
            'title' => 'Post ' . $post->title,
            'post' => $post,
            'categories' => $categories
        ]);
    }

    public function category(int $id): void
    {
        $category = (new Category)->find('id', $id);
        $posts = (new Category)->posts($id);
        $categories = (new Category)->all();
        // var_dump($posts);
        // die();
        echo $this->template->render('category', [
            'title' => 'Category ' . $category->title,
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function forbidden(): void
    {
        echo $this->template->render('forbidden', ['title' => 'Forbidden (403)']);
    }

    public function notFound(): void
    {
        echo $this->template->render('notFound', ['title' => 'Not Found (404)']);
    }

    public function errorSystem(): void
    {
        echo $this->template->render('errorSystem', ['title' => 'System Error']);
    }
}