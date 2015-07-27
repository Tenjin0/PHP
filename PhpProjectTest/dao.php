<!DOCTYPE html>
<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'patman00');
}
catch (Exception $e){
    die('Erreur : ' . $e->getMessage());    
}
$reponse =$bdd->query('SELECT * from news');

while ($données = $reponse->fetch()){
    
?>
<p>
    <strong><?php echo $données["titre"]?></strong><br/>
    contenu : <?php echo $données["contenu"]?>
</p>

<?php
}
$reponse->closeCursor();
try{
	$bdd->exec($sql);
    echo "New record created successfully";
}
catch(Exception $e){
	die("Erreur : ". $e->getMessage());
}

?>


