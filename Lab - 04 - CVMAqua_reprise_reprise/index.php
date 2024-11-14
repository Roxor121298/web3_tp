
<?php

require_once("action/IndexAction.php");

$Index = new IndexAction();
$data = $Index->execute();

require_once("partial/header.php");


?>

    <body>
		<div class="site-container">
		    <div class="page-container">
		    	<div class="site-header">
		    		<div class="page-title-section">
			    		<h1>CVMAQUA - Groupe de protection de l'eau</h1>
			    		<h2>Accueil</h2>
		    		</div>
		    		<div class="menu-section">
		    			<ul>
		    				<li><a href="index.php">Accueil</a></li>
		    				<li><a href="images.php">Galerie photos</a></li>
		    				<li><a href="contact.php">Contactez-nous</a></li>
							<?php 
							if(!$data["isConnected"])?><a href="login.php">connexion</a><br><?php


							if($data["isConnected"])?><a action=logout>deconnexion</a> <?php
							?>
		    			</ul>
		    		</div>
		    		<div class="clear"></div>
		    	</div>
		    	<div class="page-content">
		    		<div id="page-index">
		    			<img src="images/water-drop.png" alt= ""/>

		    			<p>
		    				Lorem ipsum dolor sit amet!!!!, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
		    			</p>
		    			<p>
							Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
						</p>
						<p>
							Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.
						</p>
		    			<p>
		    				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
		    			</p>
		    			<p>
							Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
						</p>
						<p>
							Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.
						</p>
		    			<p>
		    				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
		    			</p>
		    			<p>
							Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
						</p>
						<p>
							Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.
						</p>
		    		</div>
		    	</div>
		    </div>
		</div>
<?php 
require_once("partial/footer.php")
?>