<?php

    namespace App\Controllers;
    use App\Models\News;
    use App\Entities\NewsEntity;
    
    class NewsController {
        public function get(int $id = null) {
            if($id) {
                return News::getNews($id);
            } else {
                return News::getAll();
            }
        }

        public function post(NewsEntity $post) {
            if($post->id != null) {
                $this->update($post);
            } else {
                return News::insert($post);
            }
        }

        public function update(NewsEntity $post) {
            return News::update($post);
        }

        public function delete($id) {
            return News::delete($id);
        }
    }