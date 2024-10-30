<?php

namespace app\Helpers;

use Twig\Lexer;

class Template
{
    private \Twig\Environment $twig;

    public function __construct(string $dir)
    {
        $loader = new \Twig\Loader\FilesystemLoader($dir);
        $this->twig = new \Twig\Environment($loader);

        // Parte das funções para o Twig
        $lexer = new Lexer($this->twig, [
            $this->helpers()
        ]);
        $this->twig->setLexer($lexer);
    }

    public function render(string $view, array $data): string {
        return $this->twig->render($view, $data);
    }

    // Parte das funções para Twig
    public function helpers(): void {
        [
            $this->twig->addFunction(new \Twig\TwigFunction('url2', function (string $url = null) { // criando diretamente aqui
                return 'aqui url';
            })),
            $this->twig->addFunction(new \Twig\TwigFunction('url', function (string $url = null) { // usando do meu arquivo Helpers
                return Helpers::url($url);
            })),
            $this->twig->addFunction(new \Twig\TwigFunction('title', function (string $title = null) { // usando do meu arquivo Helpers
                return Helpers::title($title);
            })),
        ];
    }
}