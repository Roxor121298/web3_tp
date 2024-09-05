<?php
    
    function execute(){
        $hasError = false;

        if(!empty($_POST["champMotDePasse"])) {
            if($_POST["champMotDePasse"] != "test" ||
                $_POST["champCourriel"] != "test@test.com"){
                $hasError = true;
            }
            else{
                header("location: prive.php");
                exit;
            }
        }

        // cpmpact permet de prendre des variables
        // .. locales et en faire un dictionnaire, donc :
        return compact("hasError");
        // devient ["hasError" = > true]
    }
