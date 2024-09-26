<?php

class UserDAO {

    public static function getIndexText(){
        return file_get_contents("data/data.txt");
    }

    public static function getIndexText($txt){
        return file_put_contents("data/data.txt", $txt);
    }

}
