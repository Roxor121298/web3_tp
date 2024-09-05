<?php

    function execute(){
        $counter = file_get_contents("data/counter.txt");
        $showSuccesMessage = FALSE;

        if(!empty($_POST["message"])){
            $showSuccesMessage = True;
        }

        return compact("counter", "showSuccesMessage");
    }