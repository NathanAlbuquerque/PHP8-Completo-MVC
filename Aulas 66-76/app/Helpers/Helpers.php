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
        return $title . ' | ' . APP_NAME;
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
}