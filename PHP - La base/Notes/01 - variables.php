<!-- ouverture php (un comme doctype pour html) -->
<?php
	$firstName = "Jonh";

	if ($firstName == "Jonh"){
		$fullName = $firstName . "Smith";
	}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Variables</title>
		<meta charset="utf-8" />
	</head>
	<body>
		Nom : <?php echo $firstName ?> ou mieux : <?= $firstName ?>
	</body>
</html>







