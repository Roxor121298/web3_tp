<?php
	require_once("action/LoginAction.php");

    $action = new LoginAction();
	$data = $action->execute();

	$pageTitle = "Login";

	require_once("partial/header.php");
?>

    <form action=login.php method="post">

        <div class="form-username">
            <label for="username">Nom d'utilisateurs</label>
        </div>
        <div class="form-username">
            <input type="text" name="user" required>
        </div>
        <div class="form-password">
            <label for="password">Mots de passse</label>
        </div>
        <div class="form-password">
            <input type="password" name="pwd" required>
        </div>
        <div class="form-input">
			<button type="submit">Connexion</button>
		</div>

    </form>


<?php 

require_once("partial/footer.php");

?>