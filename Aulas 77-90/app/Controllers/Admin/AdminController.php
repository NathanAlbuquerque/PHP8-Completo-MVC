<?php

namespace app\Controllers\Admin;

use app\Controllers\Controller;

/**
 * @author Nathan Albuquerque <nathan.nra@outlook.com>
 * @copyright Copyright 2024, Isi
 */
class AdminController extends Controller
{
  public function __construct()
  {
    parent::__construct('resources/admin/views');
  }

  public function index(): void
  {
    echo $this->template->render('home', [
      'title' => 'Admin home',
    ]);
  }
}
