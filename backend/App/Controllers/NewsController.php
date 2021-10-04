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
            return News::insert($post);
        }

        public function update() {
            return News::update($post);
        }

        public function delete($id) {
            return News::delete($id);
        }
    }