<?php

    namespace App\Models;

    class News {
        private static $table = 'news';

        public static function getNews(int $id) {
            $connection = new \PDO("mysql:host=172.18.0.2;port=3306;dbname=amiguinhos", 'root', 'root');
            $query = 'SELECT * FROM '.self::$table.' WHERE id = :id';
            $response = $connection->prepare($query);
            $response->bindValue(':id', $id);
            $response->execute();

            if($response->rowCount() > 0 ) {
                return $response->fetch(PDO::FETCH_ASSOC);
            } else {
                throw new \Exception("Sem notícias encontradas");
            }
        }
    }