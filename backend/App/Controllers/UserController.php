<?php

    namespace App\Controllers;
    use App\Models\User;

    class UserController {
        public function login($username, $password) {
            $response = User::doLogin($username, $password);
            if($response) {
                $_SESSION['email'] = $username;
                $_SESSION['password'] = $password;
                header('location:posts.php');
                return $response;
            }
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            return $response;
        }

        public function logout() {
            unset($_SESSION['email']);
            unset($_SESSION['password']);
        }
    }

    