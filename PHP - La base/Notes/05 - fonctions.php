<?php
	

	function hasher($mot){
		$hash = sha1($mot);

		$hash = password_hash($mot, PASSWORD_DEFAULT);

		password_verify("test", $hash);

		return $hash;
	}


?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les fonctions</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Création d'un hash</h1>
		<div><?= hasher("test") ?></div>
		<div><?= hasher("test") ?></div>
		<div><?= hasher("test") ?></div>
		<div><?= hasher("test") ?></div>
	</body>
</html>







