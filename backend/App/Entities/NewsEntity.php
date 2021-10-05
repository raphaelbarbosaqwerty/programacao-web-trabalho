<?php

    namespace App\Entities;
    
    class NewsEntity {
        public $id;
        public $body;
        public $title;

        public function __construct($json) {
            $this->id = $json['id'];
            $this->body = $json['body'];
            $this->title = $json['title'];
        }
    }