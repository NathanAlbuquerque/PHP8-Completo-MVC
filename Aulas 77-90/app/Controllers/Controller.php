<?php

namespace app\Controllers;

use app\Helpers\Template;

/**
 * @author Nathan Albuquerque <nathan.nra@outlook.com>
 * @copyright Copyright 2024, Isi
 */
class Controller
{
    protected Template $template;

    public function __construct(string $dir)
    {
        $this->template = new Template($dir);
    }
}