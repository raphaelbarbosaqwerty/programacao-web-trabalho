<?php

    namespace App\Models;
    use App\Models\Database;

    class Contact {
        private static $table = 'contact';

        // public static function doLogin($username, $password) {
        //     $database = Database::getInstance();
        //     $connection = $database->getDatabaseConnection();
        //     $query = 'SELECT * FROM '.self::$table.' WHERE email = :email AND password = :password';
        //     $response = $connection->prepare($query);
        //     $response->bindValue(':email', $username);
        //     $response->bindValue(':password', $password);
        //     $response->execute();

        //     if($response->rowCount() > 0) {
        //         return true;
        //     } else {
        //         return false;
        //     }

        // }
    }