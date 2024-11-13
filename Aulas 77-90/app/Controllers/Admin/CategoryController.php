<?php

namespace app\Controllers\Admin;

use app\Controllers\Controller;
use app\Helpers\Helpers;
use app\Models\Category;

/**
 * @author Nathan Albuquerque <nathan.nra@outlook.com>
 * @copyright Copyright 2024, Isi
 */
class CategoryController extends Controller
{
  public function __construct()
  {
    parent::__construct('resources/admin/views');
  }

  public function index(): void
  {
    $categories = (new Category);
    $total = [
      'draft' => $categories->total('WHERE status = "draft"'),
      'published' => $categories->total('WHERE status = "published"'),
      'archived' => $categories->total('WHERE status = "archived"')
    ];
    echo $this->template->render('categories/index', [
      'title' => 'Categories',
      'categories' => $categories->all(),
      'total' => $total
    ]);
  }

  public function create(): void
  {
    echo $this->template->render('categories/create', [
      'title' => 'Category create'
    ]);
  }

  public function store(): void
  {
    $category = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $category['slug'] = Helpers::generateSlug($category['title']);
    if (isset($category)) {
      (new Category)->store($category);
    }
    $this->index();
  }

  public function edit(string $slug): void
  {
    echo $this->template->render('categories/edit', [
      'title' => 'Category edit: ' . $slug,
      'category' => (new Category)->find('slug', $slug),
      'categories' => (new Category)->all()
    ]);
  }

  public function update(int $id): void
  {
    $category = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $category['slug'] = Helpers::generateSlug($category['title']);
    if (isset($category)) {
      (new Category)->update($category, $id);
    }
    $this->index();
  }

  public function delete(string $slug): void
  {
    (new Category)->update($slug);
    $this->index();
  }
}
