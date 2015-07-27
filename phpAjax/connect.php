<?php 
	$DB_hostname = 'localhost';
	$DB_name = 'tchat';
	$DB_login = 'root';
	$DB_password = 'patman00';
	try{
		$db = new PDO("mysql:host=".$DB_hostname.";dbname=".$DB_name.";chartset=utf8",$DB_login,$DB_password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
		$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
	}
	catch(PDOException $e){
		exit('Erreur : ' . $e->getMessage());    
	}
?>