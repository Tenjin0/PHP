<?php
  if(isset($_POST) && !empty($_POST['pseudo'])){
    session_start();
    $_SESSION['pseudo'] = $_POST['pseudo'];
    header("location:tchat.php");
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <title>PhP Ajax tuto grafikArt</title>
    <!-- url -->
  </head>
  <body>
    <div class="container">
      <h1>Mon Tchat</h1>
      <form class="" action="index.php" method="post">

        Pseudo : <input type="text" name="pseudo" value="">
        <input type="submit" name="submit" value="Tchater">
      </form>
    </div>
  </body>
</html>
