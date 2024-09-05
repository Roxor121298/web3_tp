<?php

	require_once("action/indexAction.php");
	$data = execute();

	$liste = $data['liste'];

	require_once("partial/header.php");
	
?>





<?php
	require_once("partial/footer.php");