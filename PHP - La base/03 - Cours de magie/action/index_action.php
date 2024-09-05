<?php

    function execute(){
        $counter = file_get_contents("data/counter.txt");
        $counter += 1;
        file_put_contents("data/counter.txt" , counter);

        return compact("counter");
        
    }


