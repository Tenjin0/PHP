    <?php 
        if (!isset($_SESSION)){
            @session_start();
            //print_r($_SESSION['name']);
        }
        
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-type" content="text/HTML" charset="utf-8">
    </head>
    <body>
        
        <?php
            include("header.php");
            include("menu.php");
            include("fonction.php");
            /*if (isset($_POST['deco'])){
                print_r($_POST);
                echo "<br/>";
                print_r($_SESSION);
            }
             */
        ?>
        <div id="corps">
            <h1>Mon super site</h1>
            <p>
                Bienvenue sur mon site
            </p>
            
                <?php
                include("formulaire.php");
                ?>         
        </div>
        <?php include("footer.php");?>
    </body>
</html>

