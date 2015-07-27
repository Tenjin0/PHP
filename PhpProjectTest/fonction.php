<?php
//include("variable.php");
//$monString = "pim pam poum";
//echo strlen($monString)."</br>";
//echo str_replace("p", "b", $monString)."</br>";
//echo strtoupper(str_shuffle($monString))."</br>";
  
function afficherDate(){
    $année = date('Y');
    $mois = date('m');
    $jour = date('d');
    $heure = date('H');
    $minute = date('m');
    echo $année." ".
                   $mois." ".
                   $jour." ".
                   $heure." ".
                   $minute."</br>";

}
function extensionAutorise($extension){
    
    $arrayA = array("jpg","png","gif");
    return in_array($extension,$arrayA);
}
?>
