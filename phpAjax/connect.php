<?php

  try
  {
      $db = new PDO('mysql:host=localhost;dbname=tchat', 'root', 'yoda');
      $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER); // les noms de champs seront en caractères minuscules
      $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION); // les erreurs lanceront des exceptions
      $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM); // choisir le mode de FETCH FETCH_NUM,FETCH_BOTH,FETCH_ASSOC
  }
  catch(PDOException $e)
  {
      echo $e->getMessage();
  }
  catch(Exception $e)
  {
      echo 'Echec de la connexion à la base de données';
  }
?>
