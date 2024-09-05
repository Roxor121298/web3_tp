<?php

	require_once("action/indexAction.php");
	$data = execute();

	$liste = $data['liste'];

	require_once("partial/header.php");
	
?>


		<?php
			if(!empty($liste)){
				?>
				<div>
				!empty
				</div>
				<?php
			}
		?>

		<?php
			if(empty($liste)){
				?>
				<div >
				empty
				</div>
				<?php
			}
		?>
<form method="POST" action="">
    <label for="message">Message:</label><br>
    <input type="text" id="message" name="message" required><br><br>
    
    <label for="X">Coordonnée X:</label><br>
    <input type="number" id="X" name="X" required><br><br>
    
    <label for="Y">Coordonnée Y:</label><br>
    <input type="number" id="Y" name="Y" required><br><br>

    <button type="submit">Ajouter Post-It</button>
</form>


	<!-- <form action="" method="post"> 
		<label>Qu' avez vous en tête? :</label> <input type="text" id="message" method="post">
		<label>X :</label> <input type="text" id="X" method="post">
		<label>Y :</label><input type="text" id="Y" method="post">
		<button>Appliquer</button>
	</form> -->
	<a>Consulter</a>
	<a>Supprimer</a>

	<?php
	require_once("partial/footer.php");
