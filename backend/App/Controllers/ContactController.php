<?php

    namespace App\Controllers;
    use App\Models\Contact;
    use App\Entities\ContactEntity;

    class ContactController {
        public function get(int $id = null) {
            if($id) {
                return Contact::getNews($id);
            } else {
                return Contact::getAll();
            }
        }

        public function post(ContactEntity $post) {
            if($post->id != null) {
                $this->update($post);
            } else {
                return Contact::insert($post);
            }
        }

        public function update(ContactEntity $post) {
            return Contact::update($post);
        }

        public function delete($id) {
            return Contact::delete($id);
        }
    }

    