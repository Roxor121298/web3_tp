<?php
    
    function execute(){
        $spies = [];
        $username = "admin";

        // [] pour push (rapelle)
        $spies[] = "Ethan Hunt";
        $spies[] = "James Bond";

        return compact("spies", "username") ;
        // devient : [
        //  "spies"  => [],
        //  "username" = > "admin"
        //  ]
    }
    