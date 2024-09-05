<?php
    
    function execute(){
       if(!empty($_POST["score"])){
        file_put_contents("results.txt", date("Y-m-d H:i:s", time()) . " : " . $_POST["score"] . "\n", FILE_APPEND);
       }

        return[]; // ???? pour la liste ici?
    }