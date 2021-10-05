<?php

    namespace App\Controllers;
    use App\Models\News;

    class NewsController {
        public function get(int $id = null) {
            if($id) {
                return News::getNews($id);
            } else {
                return News::getAll();
            }
        }

        public function post($post) {
            return News::newPost($post);
        }

        public function update() {
            
        }

        public function delete(int $id) {
            
        }
    }