<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();
	$pageTitle = "Acceuil2";

	require_once("partial/header.php");
?>


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

require_once("partial/footer.php");

?>
		