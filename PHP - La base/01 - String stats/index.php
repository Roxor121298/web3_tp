<?php
// Si form es en post, $_POST[....]
// !empty = existe, n'est pas nulle, pas "" et pas ! = 0
// toujours faire un test not empty car si il y a un null pointer ca va planter
$showSuccessMessage = false;

if (!empty($_GET["info"])) {
	$mots = $_GET["searchBox"];
	$len = strlen($mot);
	$showSuccessMessage = true;
}
		//
		//

?>



<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>String stats</title>
        <meta charset="utf-8" />
		<link href="css/global.css" rel="stylesheet" />
	</head>
	<body>
		<div>
			<div id="analyze-icon">
				
			</div>

			

			<div id="analyze-result">
				Entrez une chaîne de caractères et appuyez sur analyser
			</div>

			<?php
			if($showSuccessMessage){
				?>
				<div style="text-align:center">
				<?php echo $len ?>
				</div>
				<?php
			}
			?>

			<form action="" method="get">
			<div id="search-line">
				<div>
					<input type="text" name="searchBox" placeholder="Texte à analyser" />
				</div>
				<div class="btn">
					<button>Analyser</button>
				</div>
			</div>
			
		</div>
		</form>
	</body>
</html>