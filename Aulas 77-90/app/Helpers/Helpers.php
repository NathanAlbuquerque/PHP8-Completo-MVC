<?php

namespace app\Helpers;

/**
 * @author Nathan Albuquerque <nathan.nra@outlook.com>
 * @copyright Copyright 2024, Isi
 */
class Helpers
{
    /**
     * Completa o título com o nome completo do site
     * 
     * @param string $title
     * @return string
     */
    public static function title(string $title = "Site"): string {
        return $title . ' · ' . APP_NAME;
    }

    /**
     * Retorna o caminho URL completo, de acordo com o ambiente (dev, prod)
     * 
     * @param string $url
     * @return string
     */
    public static function url(string $url): string {
        $url = str_starts_with($url, '/') ? $url : '/' . $url;
        if ($_SERVER['SERVER_NAME'] == 'localhost')
            return URL_DEV . $url;
        return URL_PROD . $url;
    }

    /**
     * Reduz um texto para o tamanho de caracteres desejado
     * 
     * @param string $text
     * @param int $size
     * @param string $final (optional)
     * @return string
     */
    public static function crop(string $text, int $size, string $final = '...'): string {
        return substr($text, 0, $size) . $final;
    }

    /**
     * Transforma uma sentença de texto em slug
     * 
     * @param string $text
     * @return string
     */
    public static function generateSlug(string $text): string {
        $text = iconv('UTF-8', 'ASCII//TRANSLIT', $text);
        $text = strtolower($text);
        $text = preg_replace('/[^a-z0-9-]+/', '-', $text);
        $text = trim($text, '-');
        $hash = substr(md5($text), 0, 6); // 6 caracteres de hash
        return $text . '-' . $hash;
    }
}