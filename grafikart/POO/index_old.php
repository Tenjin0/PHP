<?php
require 'personnage.php';
$merlin = new Personnage('merlin');
var_dump("<pre>");
// echo($merlin->crier().'\n');
echo($merlin->estMort().'\n');
// var_dump($merlin->crier());
var_dump("</pre>");
 ?>
