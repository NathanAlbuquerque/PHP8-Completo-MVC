<?php

namespace app\Models;

use app\Helpers\Connection;

class Model
{
    protected string $database;

    public function all(?string $termo = null): array
    {
        $query = "SELECT * FROM {$this->database} {$termo}";
        $statement = Connection::getInstance()->query($query);
        $result = $statement->fetchAll();
        return $result;
    }

    public function find(string $collumn, string|int $value): bool|object
    {
        $query = "SELECT * FROM {$this->database} WHERE status = 'published' AND {$collumn} = '{$value}'";
        // var_dump($query);
        // die();
        $statement = Connection::getInstance()->query($query);
        $result = $statement->fetch();
        return $result;
    }

    public function total(?string $termo = null): int
    {
        $query = "SELECT * FROM {$this->database} {$termo}";
        $statement = Connection::getInstance()->prepare($query);
        $statement->execute();
        return $statement->rowCount();
    }
}
