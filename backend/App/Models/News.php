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

        public static function insert($post) {
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

        public static function update($post) {
            var_dump($post);
            die();
            $database = Database::getInstance();
            $connection = $database->getDatabaseConnection();
            $query = 'UPDATE '.self::$table.' SET title = :title, image = :image, body = :body WHERE id = :id';
            $response = $connection->prepare($query);
            $response->bindValue(':title', $post['title']);
            $response->bindValue(':image', $post['image']);
            $response->bindValue(':body', $post['body']);
            $response->bindValue(':id', $post['id']);
            $response->execute();
            
            if($response->rowCount() > 0) {
                return true;
            }
            
            return false;
        }

        public static function delete($id) {
            $database = Database::getInstance();
            $connection = $database->getDatabaseConnection();
            $query = 'DELETE FROM '.self::$table.' WHERE id = :id';
            $response = $connection->prepare($query);
            $response->bindValue(':id', $id);
            $executed = $response->execute();
            
            return $execute;
        }
    }