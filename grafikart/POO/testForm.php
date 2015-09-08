<?php
    use \Grafikart\Form;
    use \Grafikart\Autoloader;
    use \Grafikart\Personnage;

    require 'class/autoloader.php';
    // spl_autoload_register('mon_autoloader');
    //  nom de la class, nom de la fonction
    // require 'class/Form.php';
    Autoloader::register();
    $form = new Form($_GET);
    $personnage = new Personnage('merlin');
 ?>
 <!DOCTYPE html>
 <html>
     <head>
         <title>test class form</title>
         <meta http-equiv="Content-type" content="text/HTML" charset="utf-8">
     </head>
     <body>

         <form class="" action="#" method="GET">
            <?php
                echo $form->text("username");
                echo $form->password("password");
                echo $form->submit("Envoyez");
                echo $form->madate();
            ?>
         </form>
     </body>
 </html>
