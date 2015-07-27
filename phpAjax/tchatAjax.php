<?php
session_start();
require("connect.php");
$d=array();
$d['erreur'] = 'init';
if(empty($_SESSION['pseudo'])){

	$d['erreur']= "vous devez vous connecter pour utiliser le tchat";
}else{

	extract($_POST);
	var_dump($_POST);
	/**
	 * Action : addMessage
	 * Permet l'ajout d'un message
	 */
	// var_dump($_POST);
	// if($_POST['action'] == "addMessage"){
	// 	$sql = 'insert into message(pseudo, message) values(:pseudo,:value);';
	// 	$stmt = $db->prepare($sql);
	// 	$stmt -> bindParam(':pseudo', $_SESSION['pseudo']['pseudo']);
	// 	$stmt->bindparam(':value',$message);
	// 	$stmt->execute();
	// 	$donnée = $stmt->fetchAll();
	// }
	$d['erreur'] = 'ok';
}

// var_dump($erreur);
echo json_encode($d);
?>