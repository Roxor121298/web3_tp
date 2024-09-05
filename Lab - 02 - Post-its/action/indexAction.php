<?php
    session_start();

    $postIT = [];

    function execute(){

        if(empty($_SESSION["post"])){
            $_SESSION["post"] = [];
        }


        if(!empty ($_POST["message"]) && !empty ($_POST["X"]) && !empty ($_POST["Y"])){

            $postIt = [
                "text" => $_POST["message"],
                "x" => $_POST["X"],
                "y" => $_POST["Y"]
    
            ];

            $_SESSION["post"][] = $postIt;
            
        }


        $liste = $_SESSION["post"];
        return compact("liste");
    }


    
