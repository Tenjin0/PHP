<?php
  session_start();
  if(!isset($_SESSION["pseudo"]) && !empty($_SESSION["pseudo"])){
    header('location:index.php');
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <title>Tchat tuto grafikArt</title>
    <!-- url -->
  </head>
  <body>
    <div class="container">
      <h1>Mon Tchat connecté en tant que <?= $_SESSION['pseudo']?></h1>
      <form class="" action="response.php" method="post">

        <input type="text" name="pseudo" value="">
        <input type="submit" name="submit" value="Tchater">
      </form>
    </div>
  </body>
</html>
