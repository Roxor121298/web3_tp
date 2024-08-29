<?php
	$lang = "fr";
?>

<!DOCTYPE html>
<html lang="<?=$lang ?>">
	<head>
		<title>Boucles</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?= 1 ?>
		<<?= "h1" ?>>Champs radio</h1> 
		<!-- injection dans la balise direct ??? -->
		<?php
			$names = []; // $ = array();
			$names[] = "Jonh"; // avant le égale [] pourpush 
			$names[] = "Jane";
			$names[] = "Joe";

			// echo $names;
			//var_dump($names); //formatter pour débugger
			foreach ($names as $names) {
				?>
				 <div>
				 	<?= $names ?>
				 </div>
				 <?php
			}
			$news = [];
			$news[] = [
				"title" => "Fait chaud!",
				"content" => "La clim ne fonctionne plus au CVM....",
			];
			$news[] = [
				"title" => "titre",
				"content" => "contenu",
			];

			foreach($news as $singleNews){
				?>
				<h2><?= $singleNews["title"]?></h2>
				<div><?= $singleNews["content"]?></div>
				<?php
			}

			?>

		<?php
		
		?>

		<?php
			for ($i = 0; $i < 100; $i++){
				?>
				 <div>
				 	<label>
				 		<input type='radio' name='bob'> <?= $i  ?> 
				 	</label>
				 </div>
				<?php
			}
		?>
	</body>
</html>







