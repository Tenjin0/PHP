<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>formulaire contact</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="./css/custom.css" rel="stylesheet">
  </head>
  <body>
    
    <?php require_once("connexion.php");?>
    <?php include("nav.php"); ?>

    <div id="main" class="container">
        <div class="row">
            <h1>Formulaire de contact</h1> 
        </div>

        <form action="contact.php" method="POST">
        
            <div class="form-group row">
                <div class="formpack col-md-6">
                    <label for="firstname"> FirstName</label>
                    <input id="firstname" class="form-control" type="text" name="firstname">
                </div>
                <div class="col-md-6">
                    <label for="email"> Email</label>
                    <input id="email" class="form-control" type="text" name="email">
                </div>
            </div>
            <div class="form-group row">
                <div class=" col-xs-12">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="message"></textarea>
                </div>
            </div>
            <button class="btn btn-primary">Envoyer</button>
        </form>

    </div><!-- container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<!--     <script src="./bower_components/jquery/dist/jquery.js"></script> 
    <script src="./bower_components/bootstrap/dist/js/bootstrap.js"></script> -->
    <!-- <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"/> -->
  </body>

</html>