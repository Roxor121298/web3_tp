<?php
	$tab = array("elem1", "elem2", 3, "name" => "john");
	$tabJSON = json_encode($tab);
	$tab = json_decode($tabJSON);
?>
<!DOCTYPE html>
<html>
	<head>
			<title>JSON</title>
			<meta charset="utf-8">
	</head>
	<body>
	<?= $tabJSON ?>
		<div>
			<script>
				let tableau = JSON.parse('<?= $tabJSON ?>');
				console.log(tableau);
				console.log(JSON.stringify(tableau));
			</script>
		</div>
	</body>
</html>
