<?php
 $tab1 = array('Pomme', "banane","poire", "fraise");
 $tab2[] = "tomates";
 $tab2[] = "poirreaux";
 $tab2[] = "oignons";
 $tab2[] = "aubergines";
 // count($tab2);
 print_r(array_slice($tab1, 1, 2));
 echo "</br>";
 print_r($tab2);
 echo "</br>";
 $coordonnée = array (
   "nom" => "petit",
   "prenom " => "patrice",
   "age" => 34,
   "sexe" => "masculin"
 );
 foreach ($coordonnée as $key => $value) {
    echo $key." ".$value."</br>";
}
$keys = array_keys($coordonnée);
foreach ( $keys as $key){
    echo $key." ".$coordonnée[$key]."</br>";
}

$message["test"] = "test";
$message["test2"] ="test2";
$message["test3"] ="test3";
var_dump($message);
