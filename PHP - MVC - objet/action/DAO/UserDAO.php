<?php
    
    class UserDAO {

        public static function authenticate($username, $password) {
            $user = null;

            if ($username == "test" && $password == "test") {
                $user = [
                    "username" => $username,
                    "first_name" => "John",
                    "visibility" => 1,
                ];
            }

            return $user;
        }

        public static function register($firstName, $lastName, $username, $password) {

        }
    }