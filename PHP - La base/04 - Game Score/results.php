<?php
 
 	require_once("action/indexAction.php");
	// Execute la logique puis retourne un dictionnaire de variables 
		// que j'utiliserai pour générer la vue
	$data = execute(); //Execute la logique du backEnd
	// $data["hasError"];

	require_once("partial/header.php");

?>
        <div class="container">
            <div class="results-container">
                <h1>
                    Résultats
                </h1>
                
                <div>2020-12-12 8:23:13 - 8.354 secondes</div>
                <div>2020-12-11 12:43:44 -  7.123 secondes</div>
                <div>2020-12-11 11:20:47 - 5.123 secondes</div>
                <div>2020-12-11 11:18:01 - 7.13 secondes</div>
                <div>2020-12-11 10:20:36 - 10.984 secondes</div>
