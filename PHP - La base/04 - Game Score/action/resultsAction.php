<?php
    
    function execute(){

        $data = file_get_contents("score.txt");
        $results = explode("\n", $data); // tableau de lignes
        
        return compact("score");

    }