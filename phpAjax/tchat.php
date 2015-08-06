<?php
  session_start();
  if(!isset($_SESSION["pseudo"]) || empty($_SESSION["pseudo"])){
    header('location:index.php');
  }
  include "connect.php";
  $select = $db->prepare("Select * from messages ORDER BY date desc LIMIT 15");
  $select->execute();
  $messages = $select->fetchAll();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <title>Tchat tuto grafikArt</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- url -->
  </head>
  <body>
    <div class="container">
      <h1>Mon Tchat connecté en tant que <?= $_SESSION['pseudo']?></h1>
      <form id="tchatForm" action="response2.php" method="post">
        <textarea  name="pseudo" rows="2" cols="50"></textarea>
        <input type="submit" name="submit" value="Tchater">
      </form>
      <div class="tchat">
      <?php
      for($i = count($messages) -1; $i >= 0 ; $i--){
      ?>
      <p>[<?= $messages[$i]["3"] ?>] <strong><?= $messages[$i]["1"]; ?></strong> : <?=  htmlentities($messages[$i]["2"]);?></p>
      <?php
        }
      ?>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="js/tchat.js" type="text/javascript"></script>
  </body>
</html>
