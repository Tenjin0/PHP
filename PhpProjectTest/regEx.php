<?php 

	if (isset($_GET['demo'])){
		$tab = array("banane", "poire" ,"pomme");
		$tab[] = "tomate";
		$tab[] = "poivron";
		$tab[] = "champignon";

		print_r($tab);
		echo "\n";
		$lettrerecherchée = "a";
		foreach ($tab as $key => $value) {
			
			if (preg_match("#$lettrerecherchée#",$value)){
				echo "l'indice $key "."possede la lettre $lettrerecherchée"."\n";
			} else{
				echo "pas de chocolat"."\n";
			}
		}
		if (!empty($_GET['tel'])){
			$regexTel = "#^0[1-68]([-. ]?[0-9]{2}){4}$#";
			if (preg_match($regexTel, $_GET['tel'])){
				echo "c'est un numero de tel valide";
			}else{
				echo "Ce n'est pas une numero de telephone valide";
			}
		}	
	}
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Test de numero de telephone</title>
</head>
<body>
	<form action="regEx.php" method="GET">
		<label>numéro de télephone</label>
		<input type="text" name="tel" value=
		<?php
			if (!empty($_GET["tel"])){
				echo $_GET["tel"];
			}
		?>
		>
		<input type="submit" value="Tester"/><br/>
	</form>
</body>
</html>