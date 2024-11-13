<?php

namespace app\Helpers;

use Twig\Environment;
use Twig\Lexer;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFunction;

/**
 * @author Nathan Albuquerque <nathan.nra@outlook.com>
 * @copyright Copyright 2024, Isi
 */
class Template
{
    public Environment $twig;

    public function __construct(string $dir)
    {
        // Carrega o ambiente de templates
        $loader = new FilesystemLoader($dir);
        $this->twig = new Environment($loader);

        // Carrega minhas funções personalizadas
        $lexer = new Lexer($this->twig, [$this->functions()]);
        $this->twig->setLexer($lexer);
    }

    /**
     * Renderiza a View informada de acordo com a pasta carregada pelo FilesystemLoader na Enviroment
     */
    public function render(string $view, array $data): string {
        return $this->twig->render($view . '.php', $data);
    }

    /**
     * Minhas funções personalizadas para usar no Twig Template
     * 
     * @return void
     */
    public function functions(): void {
        [
            $this->twig->addFunction(new TwigFunction('title', function(string $title) {
                return Helpers::title($title);
            })),
            $this->twig->addFunction(new TwigFunction('url', function(string $url) {
                return Helpers::url($url);
            })),
            $this->twig->addFunction(new TwigFunction('crop', function(string $text, int $size, string $final = '...') {
                return Helpers::crop($text, $size, $final);
            })),
        ];
    }
}