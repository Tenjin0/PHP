<?php 
	session_start();
	require_once("connexion.php");
	require_once("lib/Form.php");

	// var_dump($_POST);

 	$_SESSION['input']['firstname'] = isset($_POST['firstname'])?addslashes($_POST['firstname']):null;
	$_SESSION['input']['email'] = isset($_POST['email'])?addslashes($_POST['email']):null;
	if  ( !(empty($_POST)) 
		&& strlen($_POST['firstname']) >= 4 
		&& filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) 
		&& ($_POST['password'] == $_POST['confirmpassword'])
		&& (strlen($_POST['password']) >= 6)
		) {

		// faire une classe qui verifie que que les données de l'incription est bon et que que le meme email n'existe pas deja
		$token = sha1(uniqid(rand()));
		// $token = insertUser($_POST['firstname'], $_POST['email'], $_POST['password'], $db);
		if ($token != 23000){
			$validation = sendmailActivationCompte($email, $token);
			// var_dump($validation);
		} else {
			$_SESSION['errors']['emailAleadyExist']= "L'email existe deja.";
		}
	} else {
		if(!(empty($_POST)) && strlen($_POST['firstname']) < 4 ){
				$_SESSION['errors']['firstname'] = "Votre prenom dit comporter au minimum 4 caracteres";
		}
		if(!(empty($_POST)) && !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) ){
			$_SESSION['errors']['email'] = "Votre email n'est pas valide";
		}
		if(!(empty($_POST)) && ($_POST['password'] != $_POST['confirmpassword'])){
			$_SESSION['errors']['confirmpassword'] = "Votre mot de passe ne correspond pas";
		}
		if(!(empty($_POST)) && strlen($_POST['password']) < 6){
			$_SESSION['errors']['password'] = "Votre mot de pase  doit comporter au minimum 6 caracteres";
			
		}
		
	}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Register</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href="./css/custom.css" rel="stylesheet">
	</head>
	<body>
		<?php include("nav.php"); ?>
		<div id="main" class="container">
			
			<div class="row">
					<h1>Formulaire d'inscription</h1> 
			</div>
			<form action="register.php" method="POST">
				
				<?php 
					if (isset($_SESSION['errors']['emailAleadyExist'])){
				?>
					<div id="alertEmailAlrealdyExist" class="alert alert-block alert-danger" style="display:show">         

				<?php echo $_SESSION['errors']['emailAleadyExist'];
							echo "</div>";
					} 
				?>

				<div class="form-group row">
					<?php
						$form= new Form($_SESSION);
						echo $form->text('firstname','Firstname','formpack');
						echo $form->email('email','Email');

					?>
					
					
				</div>
				<div class="form-group row">
				<?php 
					echo $form->password('password','Password');
					echo $form->password('confirmpassword','Confirm password');
				?>
					
				</div>
				<button class="btn btn-primary">Envoyer</button>
			</form>
			<div class="row">
				<div class="col-md-4">
					<h3>POST</h3>
					<?= var_dump($_POST); ?>
				</div>
			</div>
		</div><!-- container -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<!-- <script>
		$(function(){
		if ( $( "#divfirstname" ).is( ".has-error" ) ){
				$("#alertfirstname").show("slow");
		}
		if ( $( "#divemail" ).is( ".has-error" ) ){
				$("#alertemail").show("slow");
		}
		if ( $( "#divpassword" ).is( ".has-error" ) ){
				$("#alertpassword").show("slow");
		}
		if ( $( "#divconfirmpassword" ).is( ".has-error" ) ){
				$("#alertconfirmpassword").show("slow");
		}

		});
		</script> -->
		<script type="text/javascript"></script>
	</body>
</html>
<?php unset($_SESSION['errors'])?>
<?php unset($_SESSION['input'])?>