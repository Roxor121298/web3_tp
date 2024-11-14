<?php
    require_once("action/CommonAction.php");

    class ContentDAO{

            public static function getContent(){
                return file_get_contents("wtv.txt");
            }

            public static function setContent($text){
                return file_put_contents("wtv.txt", $text);
            }




    }