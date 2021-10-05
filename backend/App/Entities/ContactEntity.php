<?php

    namespace App\Entities;
    
    class ContactEntity {
        public $id;
        public $email;
        public $message;

        public function __construct($json) {
            $this->id = $json['id'];
            $this->email = $json['email'];
            $this->message = $json['message'];
        }
    }