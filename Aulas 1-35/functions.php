<?php

/**
 * Recebe um texto e retorna no tamanho informado. Caso a quantidade limite para resumir o texto for maior que o  tamanho do texto, logo o texto não será resumido nem será adicionado o texto de $continue ao final.
 * 
 * @param string $text texto completo que será resumido.
 * @param int $qtd limite de caractere para resumir o texto.
 * @param string $continue (optional) texto que será inserido ao final do texto resumido. Caso não seja informado, será adicinado por padrão três pontos seguidos '...'.
 * @return string
 */
function resumirTexto(string $text, int $qtd, string $continue = '...'): string
{
    if (strlen($text) > $qtd)
        return substr(trim($text), 0, $qtd) . ' ' . $continue;
    return $text; 
}

/**
 * @return string
 */
function saudacao(): string
{
    $hora = date('H');
    $saudacao = 'Tudo bem?';

    if ($hora >= 18) {
        $saudacao = 'Boa noite!';
    } elseif ($hora >= 12) {
        $saudacao = 'Boa tarde!';
    } elseif ($hora >= 6) {
        $saudacao = 'Bom dia!';
    } elseif ($hora >= 0) {
        $saudacao = 'Boa madrugada!';
    }

    return '<h1>' . $saudacao . '</h1>';
}


function url(string $url): string {
    // $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME'); // verificar porque esta retornando null
    $servidor = $_SERVER['SERVER_NAME'];
    $ambiente = $servidor == 'localhost' ? URL_DEV : URL_PROD;
    if (str_starts_with($url, '/'))
        return $ambiente . $url;
    return $ambiente . '/' . $url;
}


function dataFormatada(): string {
    $meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
    return date('d') . ' de ' . $meses[date('m') - 1] . ' de ' . date('Y');
}