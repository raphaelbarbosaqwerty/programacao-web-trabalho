<?php

    /**
     * Singleton design pattern for Database connection
     */
    
    namespace App\Models;

    class Database
    {
        private static $instances = [];

        protected function __construct() { }

        protected function __clone() { }

       
        public function __wakeup()
        {
            throw new \Exception("Impossível disposar o Database!");
        }

        public static function getInstance(): Database
        {
            $cls = static::class;
            if (!isset(self::$instances[$cls])) {
                self::$instances[$cls] = new static();
            }

            return self::$instances[$cls];
        }

        public function getDatabaseConnection()
        {
            return new \PDO("mysql:host=172.18.0.2;port=3306;dbname=amiguinhos", 'root', 'root');
        }
}