<?php

namespace app\Helpers;

/**
 * @author Nathan Albuquerque <nathan.nra@outlook.com>
 * @copyright Copyright 2024, Isi
 */
class Helpers
{
    /**
     * Converte o caminho completo, identificando o ambiente (dev ou prod)
     * 
     * @param string $url (opcional) caminho, a barra inicial é opcional
     * @return string
     */
    public static function url(string $url = null): string
    {
        $url = str_starts_with($url, '/') ? $url : '/'.$url;
        if ($_SERVER['SERVER_NAME'] == 'localhost')
            return URL_DEV . $url;
        return URL_PROD . $url;
    }

    /**
     * Retorna um formato de título padrão
     * 
     * @param string $title (opcional)
     * @return string
     */
    public static function title(string $title = 'Site'): string
    {
        return $title . ' | ' . APP_NAME;
    }
}