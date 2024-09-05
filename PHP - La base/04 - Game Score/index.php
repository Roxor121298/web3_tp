<?php
 
 	require_once("action/indexAction.php");
	// Execute la logique puis retourne un dictionnaire de variables 
		// que j'utiliserai pour générer la vue
	$data = execute(); //Execute la logique du backEnd
	// $data["hasError"];

	require_once("partial/header.php");

?>


        <div class="container">
            <div class="game-container">
                <canvas width="960" height="576"></canvas>

                <div class="save-form-section">
                    <form action="" method="post">
                    <input type="hidden" name="score" id="score" />
                        <button>Enregistrer</button>
                    </form>
                    </div>
                    <?php
require_once("partial/footer.php");
