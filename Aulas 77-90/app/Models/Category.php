<?php

namespace app\Models;

use app\Helpers\Connection;

class Category extends Model
{
    protected string $database = 'categories';

    public function posts(int $category_id): array {
        $query = "SELECT * FROM posts WHERE status = 'published' AND category_id = {$category_id}";
        $statement = Connection::getInstance()->query($query);
        $result = $statement->fetchAll();
        return $result;
    }

    // Método 1 de store
    public function store(array $category): void
    {
        $query = "INSERT INTO {$this->database} (title, slug, text, status) VALUES (?, ?, ?, ?)";
        // var_dump($query);
        // die();
        $statement = Connection::getInstance()->prepare($query);
        $statement->execute([$category['title'], $category['slug'], $category['text'], $category['status']]);
    }

    public function update(string $slug): void
    {
        $query = "DELETE FROM {$this->database} WHERE slug = '{$slug}'";
        $statement = Connection::getInstance()->prepare($query);
        $statement->execute();
    }
}
