<?php

namespace app\Controllers\Admin;

use app\Controllers\Controller;
use app\Helpers\Helpers;
use app\Models\Category;
use app\Models\Post;

/**
 * @author Nathan Albuquerque <nathan.nra@outlook.com>
 * @copyright Copyright 2024, Isi
 */
class PostController extends Controller
{
  public function __construct()
  {
    parent::__construct('resources/admin/views');
  }

  public function index(): void
  {
    $posts = (new Post);
    $total = [
      'draft' => $posts->total('WHERE status = "draft"'),
      'published' => $posts->total('WHERE status = "published"'),
      'archived' => $posts->total('WHERE status = "archived"')
    ];
    echo $this->template->render('posts/index', [
      'title' => 'Posts',
      'posts' => $posts->all(),
      'total' => $total
    ]);
  }

  public function create(): void
  {
    echo $this->template->render('posts/create', [
      'title' => 'Post create',
      'categories' => (new Category)->all()
    ]);
  }

  public function store(): void
  {
    $post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $post['slug'] = Helpers::generateSlug($post['title']);
    if (isset($post)) {
      (new Post)->store($post);
    }
    $this->index();
  }

  public function edit(string $slug): void
  {
    echo $this->template->render('posts/edit', [
      'title' => 'Post edit: ' . $slug,
      'post' => (new Post)->find('slug', $slug),
      'categories' => (new Category)->all()
    ]);
  }

  public function update(int $id): void
  {
    $post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $post['slug'] = Helpers::generateSlug($post['title']);
    if (isset($post)) {
      (new Post)->update($post, $id);
    }
    $this->index();
  }

  public function delete(string $slug): void
  {
    (new Post)->delete($slug);
    $this->index();
  }
}
