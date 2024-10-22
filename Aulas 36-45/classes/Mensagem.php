<?php

/**
 * @author Nathan Albuquerque <nathan.nra@outlook.com>
 * @copyright Copyright (c) 2024, Isi
 */
class Mensagem
{
    private $texto = 'Informações...';
    private $css;
    private $alertClasses = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'];

    // "$this" chama-se pseudo-classe.
    // Na aula que estou assistindo ele informou a linha acima, porem o GPT informou a linha abaixo.
    // Em algumas linguagens ou contextos, "pseudo-classe" pode se referir a conceitos semelhantes, mas em PHP, a terminologia mais precisa para $this é a de "variável especial" ou "referência ao objeto". Se precisar de mais esclarecimentos sobre a aula, estou aqui para ajudar!

    public function __toString()
    {
        return $this->renderizar();
    }

    /**
     * @return Mensagem
     */
    public function definirMensagem(string $mensagem): Mensagem
    {
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    /**
     * @param int $alerta número de 0 a 6 que define o estilo da classe para ser renderizado. 0: primary - 1: secondary - 2: success - 3: danger - 4: warning - 5: info - 6: light - 7: dark.
     * @return string
     */
    public function renderizar($alerta = 0): string
    {
        $this->css = "alert alert-{$this->alertClasses[$alerta < 8 ?$alerta : 0]} mx-2";
        return $this->texto = "<span class='{$this->css}'>{$this->texto}</span>";
        // return $this->texto = $this->filtrar('<h1>Olá @user</h1>');
    }

    /**
     * @return string
     */
    private function filtrar(string $texto): string
    {
        return filter_var(strip_tags($texto), FILTER_SANITIZE_SPECIAL_CHARS);
    }
}
