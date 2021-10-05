<?php

    namespace App\Models;
    use App\Models\Database;
    use App\Entities\ContactEntity;

    class Contact {
        private static $table = 'contact';

        public static function getContact(int $id) {
            $database = Database::getInstance();
            $connection = $database->getDatabaseConnection();
            $query = 'SELECT * FROM '.self::$table.' WHERE id = :id';
            $response = $connection->prepare($query);
            $response->bindValue(':id', $id);
            $response->execute();

            if($response->rowCount() > 0 ) {
                return $response->fetch(\PDO::FETCH_ASSOC);
            } else {
                throw new \Exception("Sem mensagens encontradas");
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
                throw new \Exception("Sem mensagens encontradas");
            }
        }

        public static function insert(ContactEntity $post) {
            $database = Database::getInstance();
            $connection = $database->getDatabaseConnection();
            $query = 'INSERT INTO '.self::$table.' (email, message) VALUES (:email, :message)';
            $response = $connection->prepare($query);
            $response->bindValue(':email', $post->email);
            $response->bindValue(':message', $post->message);
            $response->execute();
            
            if($response->rowCount() > 0) {
                return true;
            }
            
            return false;
        }

        public static function update(ContactEntity $post) {
            $database = Database::getInstance();
            $connection = $database->getDatabaseConnection();
            $query = 'UPDATE '.self::$table.' SET email = :email, message = :message WHERE id = :id';
            $response = $connection->prepare($query);
            $response->bindValue(':email', $post->email);
            $response->bindValue(':message', $post->message);
            $response->bindValue(':id', $post->id);
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