<?php

namespace app\Models;

use app\Helpers\Connection;

class Post extends Model
{
    protected string $database = 'posts';

    public function search(string|int $value): array
    {
        $query = "SELECT * FROM {$this->database} WHERE status = 'published' AND (title LIKE '%{$value}%' OR text LIKE '%{$value}%')";
        // var_dump($query);
        // die();
        $statement = Connection::getInstance()->query($query);
        $result = $statement->fetchAll();
        return $result;
    }

    // Método 2 de store
    public function store(array $post): void
    {
        $query = "INSERT INTO {$this->database} (category_id, title, slug, text, status) VALUES (:category_id, :title, :slug, :text, :status)";
        // var_dump($query);
        // die();
        $statement = Connection::getInstance()->prepare($query);
        $statement->execute($post);
    }

    public function update(array $post, int $id): void
    {
        // var_dump($post);
        // die();
        $query = "UPDATE {$this->database} SET category_id = :category_id, title = :title, slug = :slug, text = :text, status = :status WHERE id = {$id}";
        $statement = Connection::getInstance()->prepare($query);
        $statement->execute($post);
    }

    public function delete(string $slug): void
    {
        // var_dump($post);
        // die();
        $query = "DELETE FROM {$this->database} WHERE slug = '{$slug}'";
        $statement = Connection::getInstance()->prepare($query);
        $statement->execute();
    }
}
