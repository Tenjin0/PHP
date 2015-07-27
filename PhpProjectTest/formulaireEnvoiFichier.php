
<?php
if (isset($_FILES['monFichier']) AND ($_FILES['monFichier']['error'] == 0)){
    print_r(pathinfo($_FILES['monFichier']['name']));
} else {
    echo "la tete a toto"."<br/>";
}

?>
"<br/>"
<a href="accueil.php">Retour a la page d'accueil</a>

