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
}
