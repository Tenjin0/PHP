<?php 
	session_start();
	if(empty($_SESSION["pseudo"])){
		header("location:index.php");
	} 
	include "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>PhP Ajax</title>

</head>
<body>
<div class="container">	
	<h1>Connecté en tant que <?= $_SESSION["pseudo"];?></h1>
	<div id="tchat">
	<?php 
		$sql = "Select * from message order by date desc limit 15;";
		$reponse = $db->prepare($sql);
		$reponse->execute();
		$donnée = $reponse->fetchAll();
		foreach ($donnée as $value) {
	?>
			<div><?=  $value['date']?> <?=  $value['pseudo']?> : <?= htmlentities($value['message'])?></div>
	<?php
		}

	?>
		
	</div>
	<form id="tchatForm" action="#" method="post">
	<textarea name="message" id="" cols="60" rows="2"></textarea>
		<input type="submit" name="envoyerMessage" value="message" >
	</form>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript" src="./tchat.js"></script>
</body>
</html>