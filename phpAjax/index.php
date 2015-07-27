<?php

	if(!empty($_POST) && !empty($_POST['pseudo'])){
		session_start();
		$_SESSION['pseudo'] = $_POST['pseudo'];
		header('location:tchat.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>PhP Ajax</title>
</head>
<body>
	<div class="container">
		<h1>Mon Tchat</h1>
		<form action="index.php" method="post">
			<input type="text" name="pseudo">
			<input type="submit" name="envoyerPseudo" value="pseudo">
		</form>	
	</div>
</body>
</html>