<?php

    namespace App\Models;
    use App\Models\Database;

    class News {
        private static $table = 'news';

        public static function getNews(int $id) {
            $database = Database::getInstance();
            $connection = $database->getDatabaseConnection();
            $query = 'SELECT * FROM '.self::$table.' WHERE id = :id';
            $response = $connection->prepare($query);
            $response->bindValue(':id', $id);
            $response->execute();

            if($response->rowCount() > 0 ) {
                return $response->fetch(\PDO::FETCH_ASSOC);
            } else {
                throw new \Exception("Sem notícias encontradas");
            }
        }

        public static function getAll() {
            $database = Database::getInstance();
            $connection = $database->getDatabaseConnection();
            $query = 'SELECT * FROM '.self::$table;
            $response = $connection->prepare($query);
            $response->execute();

            if($response->rowCount() > 0 ) {
                return $response->fetchAll(\PDO::FETCH_ASSOC);
            } else {
                throw new \Exception("Sem notícias encontradas");
            }
        }

        public static function newPost($post) {
            $database = Database::getInstance();
            $connection = $database->getDatabaseConnection();
            $query = 'INSERT INTO '.self::$table.' (title, image, body) VALUES (:title, :image, :body)';
            $response = $connection->prepare($query);
            $response->bindValue(':title', $post['title']);
            $response->bindValue(':image', $post['image']);
            $response->bindValue(':body', $post['body']);
            $response->execute();
            
            if($response->rowCount() > 0) {
                return true;
            }
            
            return false;
        }
    }