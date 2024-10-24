<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();
?>
<!DOCTYPE html>
<html>
	<head>
			<title>Mon engin de courriels</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="css/global.css">
			<script>
				const checkEmails = () => {
					// $.ajax() <-- old stuff!

					let form = new FormData(); // <form>
					form.append("username", "ken"); // <input type='text' name='username' value='ken'>
					form.append("password", "AAAaaa111"); // <input type='password' name='username' value='AAAaaa111'>

					fetch("ajax.php", {
						method: 'post',
						body: form	
					})
					.then(response => response.json())
					.then(data => {
						console.log(data);
						let node = document.querySelector("#contenantCourriels")
						node.innerText = data;
						// node.innerHTML = data;
						// node.append(data)
						setTimeout(checkEmails, 500);
					})

					// console.log(1)

				}		
			</script>
	</head>
	<body>
		<div class="container">
			<h1>Mes courriels</h1>
	
			<p>Vous avez actuellement</p>
			<div id="contenantCourriels">--</div> 
			<p>nouveaux courriels.</p>

			<div class="refresh-section">
				<button onclick="checkEmails()">
					<img src="images/refresh.png" alt="Rafraîchir">
				</button>
			</div>
		</div>
	</body>
</html>
