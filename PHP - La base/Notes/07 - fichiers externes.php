


<?php
// require once au lieu de juste require pour évité de double call la meme fonction
	require_once("lib/Utils.php");


	// Va chercher le fichier mais si tu ne trouve pas ce n'est pas grave
	include_once("lib/Utils.php");
?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Fichiers externes</title>
		<meta charset="utf-8" />
	</head>
	<body>
		Résultat : <?= resultatFormuleScientifique(1,3) ?>
	</body>
</html>







