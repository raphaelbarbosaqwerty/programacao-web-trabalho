<?php

    namespace App\Entities;
    
    class ContactEntity {
        public $email;
        public $message;

        public function __construct($json) {
            $this->email = $json['email'];
            $this->message = $json['message'];
        }
    }