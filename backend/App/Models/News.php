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
    }