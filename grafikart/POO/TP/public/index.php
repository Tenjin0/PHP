<?php
    use App\Autoloader;
    use App\Form;
    require '../app/Autoloader.php';

    Autoloader::register();

    if (isset($_GET['p'])){
        $p =  $_GET['p'];
    } else {
        $p = 'home';
    }

    // Initialistion des objets    
    $db = new App\database('Blog');
    ob_start();
    require '../page/'.$p .'.php';
    $content = ob_get_clean();
    require '../page/template/default.php';
 ?>
