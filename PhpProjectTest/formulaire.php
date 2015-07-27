       <?php
            if (isset($_SESSION) AND isset($_POST['deco'])){
                   //
                   //
                   $_SESSION = array();
                   //@session_cache_expire($new_cache_expire);
                   @session_destroy();
                   //echo session_id();
                   //$_SESSION['name'] = "";
                    //print_r($_SESSION);
            }
            if (!isset($_POST['prenom']) OR trim($_POST['prenom']) == ""){

                if (isset($_SESSION['name'])){    
                    echo $_SESSION['name'];
                }
        ?> 
            <form id="formNom" action="accueil.php" method="post"  enctype="multipart/form-data">
                <input name="prenom" type="text">
                <input type="submit" name="valider"><br/>
        <?php
            }
            if (!isset($_FILES['monfichier']) OR ($_FILES['monfichier']['error'] != 0)){   
                echo "<input type='file' name='monfichier' />";
            }
            if (isset($_FILES['monfichier']) AND ($_FILES['monfichier']['error'] == 0)){
                    if (extensionAutorise(pathinfo($_FILES['monfichier']['name'])['extension'])){
                        echo print_r(pathinfo($_FILES['monfichier']['name']));
                        move_uploaded_file($_FILES['monfichier']['tmp_name'],"upload/" . basename($_FILES['monfichier']['name']));
                    }else{
                        echo "extension non autorisée<br/>";
                    }
                        
                    }
            if (!isset($_POST['prenom']) OR trim($_POST['prenom']) == ""){
            ?>
            </form>
            <?php
            
            }else if (isset($_POST["prenom"])){
                    $_SESSION['name'] = $_POST['prenom'];
                    echo "<p> Bonjour ".htmlspecialchars($_SESSION['name'])."</p>";
            ?>
                    <a href='accueil.php'>Retour a la page d'accueil</a><br/>
                    <form action="accueil.php" method="post">
                        <input name="deco" value="Deconnexion" type="submit">
                    </form>
            <?php
                    
             }
             ?>
             
            