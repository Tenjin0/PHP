<?php 
try{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','patman00');
	// echo "je passe par la\n";
	$sql = "SELECT * from news";

	$reponse = $bdd->query($sql);

}
catch(Exception $e){
	die("Erreur : ". $e->getMessage());
}

	$données = $reponse->fetchAll();
	print_r($données[0]);
	if (array_key_exists('titre',$données[0])){
		echo "trouve\n";
	}
	if(in_array('titre',$données[0])){
		echo "trouve\n";
	}else {
		echo "non trouve\n";
	}
	$position = array_search('titre1',$données[0]);
	echo $position;
?>