<?php
    require 'personnage.php';
    // use Roleplay\Personnage as Personnage;
    $merlin = new Personnage('Merlin');
    $harry = new Personnage('Harry');
    $harry->attaque($merlin);
    var_dump('<pre>');
    var_dump($merlin);
    var_dump('</pre>');

 ?>
