<?php

namespace app\Controllers;

use app\Suporte\Template;

class Controller
{
    protected Template $template;

    public function __construct(string $dir)
    {
        $this->template = new Template($dir);
    }
}