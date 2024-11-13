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
        parent::__construct('resources/guest/views');
    }

    public function home(): void
    {
        $posts = (new Post)->all("WHERE status = 'published'");
        $categories = (new Category)->all("WHERE status = 'published'");
        echo $this->template->render('home', [
            'title' => 'Home',
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function about(): void
    {
        $categories = (new Category)->all("WHERE status = 'published'");
        echo $this->template->render('about', [
            'title' => 'About',
            'categories' => $categories
        ]);
    }

    public function contact(): void
    {
        $categories = (new Category)->all("WHERE status = 'published'");
        echo $this->template->render('contact', [
            'title' => 'Contact',
            'categories' => $categories
        ]);
    }

    public function post(string $slug): void
    {
        $post = (new Post)->find('slug', $slug);
        $categories = (new Category)->all("WHERE status = 'published'");
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
        $categories = (new Category)->all("WHERE status = 'published'");
        // var_dump($posts);
        // die();
        echo $this->template->render('home', [
            'title' => 'Category ' . $category->title,
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function searchPHPGet(): void
    {
        $categories = (new Category)->all("WHERE status = 'published'");
        $posts = [];
        // var_dump($posts);
        // die();
        echo $this->template->render('search-php', [
            'title' => 'Search only PHP',
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function searchPHPPost(): void
    {
        $search = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $categories = (new Category)->all("WHERE status = 'published'");
        if (isset($search))
            $posts = (new Post)->search($search['search']);
        else {
            $posts = [];
        }
        // var_dump($posts);
        // die();
        echo $this->template->render('search-php', [
            'title' => 'Search only PHP: ' . $search['search'],
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function searchJQueryAjaxGet(): void
    {
        // echo "get";
        $posts = (new Post)->all("WHERE status = 'published'");
        $categories = (new Category)->all("WHERE status = 'published'");
        echo $this->template->render('search-jquery-ajax', [
            'title' => 'Home',
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function searchJQueryAjaxPost(): void
    {
        // echo "post";
        $search = filter_input(INPUT_POST, 'search', FILTER_DEFAULT);
        if (isset($search) && count($search) > 0) {
            foreach ((new Post)->search($search) as $post) {
                echo '<div class="col-lg-4 col-sm-12">';
                echo '  <div class="card h-100">';
                echo '      <div class="card-body">';
                echo '          <h5 class="card-title">' . $post->title . '</h5>';
                echo '          <p class="card-text">' . $post->text . '</p>';
                echo '          <a href="{{ url(post/) }}{{ post.slug }}" class="btn btn-primary">Read more</a>';
                echo '      </div>';
                echo '  </div>';
                echo '</div>';
            }
        } else {
            echo '<div class="alert alert-warning" role="alert">Nenhum post encontrado com este termo.</div>';
        }
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
