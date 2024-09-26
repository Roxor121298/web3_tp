<?php

class UserDAO {


        publis static function verifyUser($user,$pasw){
            $result = false;


            if($user === "Ed" && $pasw === "burger"){
                $result = true;
            }

            return $result;


        }


}