
<?php
// https://openclassrooms.com/courses/pdo-comprendre-et-corriger-les-erreurs-les-plus-frequentes
session_start();
include 'connect.php';
$d=array();
if(!isset($_SESSION["pseudo"]) || empty($_SESSION["pseudo"])){
  $d ["erreur"] ="vous devez etre connecté au tchat";
}else
if(isset($_POST["action"])){
  if(isset($_SESSION["pseudo"])){
    $pseudo = mysql_escape_string($_SESSION["pseudo"]);
  } else  if(isset($_POST["pseudo"])){
    $pseudo = mysql_escape_string($_POST["pseudo"]);
  }
  if("addMessage" == $_POST["action"]){
    $message = mysql_escape_string($_POST["message"]);
    $stmt =$db->prepare('insert into messages(pseudo,message) values(:pseudo,:message)');
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->bindParam(':message', $message);
    $stmt->execute();
    $d['id'] = $db->lastInsertId();
    $d["erreur"] = "ok";
  }

  if("getLastMessage" == $_POST["action"]){
    $stmt =$db->prepare('select * from messages ORDER BY date DESC LIMIT 1');
    $stmt->execute();
    $d['id'] = $db->lastInsertId();
    $d["data"] = $stmt->fetchAll();
    $d["erreur"] = "ok";
  }
  $d['action'] = $_POST["action"];
}
echo(json_encode($d)) ;
?>
