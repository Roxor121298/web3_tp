<?php
// Si form es en post, $_POST[....]
// !empty = existe, n'est pas nulle, pas "" et pas ! = 0
// toujours faire un test not empty car si il y a un null pointer ca va planter
$showSuccessMessage = false;

if (!empty($_GET["info"])){
		// echo $_GET["info"];
		// exit;
		$showSuccessMessage = true;
	}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les formulaires</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			if($showSuccessMessage){
				?>
				<div style="color:green;padding3px;border:1px solid green">
				Merci d'avoir participé
				</div>
				<?php
			}
		?>
		<!-- on peut laisser action vide pour ce rappeler soit meme( la page ou on est) -->
		<form action="04 - formulaire.php" method="get">
			<div>
				Info : <input type="text" name="info" />
			</div>
			<div>
				<input type="submit" value="Go!" />
			</div>
		</form>
	</body>
</html>







