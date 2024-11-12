<?php

namespace app\Helpers;

use PDO;
use PDOException;

class Connection
{
    private static PDO $instance;

    public static function getInstance(): PDO
    {
        if(empty($instance)) {
            try {
                self::$instance = new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME, DB_USER, DB_PASS, [
                    // Usando constantes predefinidas para ajudar no tratamento de dados da minha conexão, vide: https://www.php.net/manual/pt_BR/PDO.constants.php
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                    PDO::ATTR_CASE => PDO::CASE_NATURAL
                ]);
            } catch (PDOException $e) {
                die("Connection error: " . $e->getMessage());
            }
        }
        return self::$instance;
    }

    // Agora, para manter o padrão de design Singleton, que é um padrão de projeto que garante que uma classe tenha apenas uma instância durante a execução de um programa.
    // Que no caso é o ideal para uma classe de conexão.

    // Isso impede que novas instyancias da classe sejam criadas fora desta classe. O operador 'new' não pode ser usado
    protected function __construct()
    {
        
    }

    // Impede que ela seja clonada
    private function __clone(): void
    {
        
    }
}