<?php
    use \Grafikart\Personnage;
    require 'class/Personnage.php';

    // function __autoload($class_name){
    //     require 'class/'.$class_name.'.php';
    // }

    // use Roleplay\Personnage as Personnage;
    $merlin = new Personnage('Merlin');
    $harry = new Personnage('Harry');
    $harry->attaque($merlin);
    var_dump('<pre>');
    var_dump($merlin);
    var_dump('</pre>');

 ?>
