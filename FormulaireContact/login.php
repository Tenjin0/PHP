<?php 
	session_start();
  	require_once("connexion.php");
	// $email = htmlentities('patricepetit@hotmail.com');
	// $password = sha1('patman00');
	// var_dump($password);
	// $validation = findUser($email, $password,$db);
	// var_dump($validation);
	if( !empty($_POST)
		&& filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)
		&& strlen($_POST['password']) >= 6
		){
		// var_dump($_POST);
		$email = htmlentities($_POST['email']);
		$password = sha1($_POST['password']);

		$validation = findUser($email, $password,$db);
		var_dump($validation);
	}

?> 
<!DOCTYPE html>
<html>
<head>
    <title>formulaire de Connexion</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="./css/custom.css" rel="stylesheet">
    <!-- <link href="./css/inconnu.css" rel="stylesheet"> -->
  </head>
<body>
	<div id="main" class="container">
		<div class="row">
            <h1>Formulaire de Connexion</h1> 
        </div>
		
		<form class="form-inline" action="<?php echo  REFFERER.DS.'users/login';?>" method="POST">
			<div class="row">
				<div class="form-group">
					<label class="sr-only" for="email">Email</label>
					<input id="email" name="email" type="text" class="form-control input-sm" placeholder="email@email.com" value="<?= isset($_POST['email'])?$_POST['email']:''; ?>">
				</div>
				<div class="form-group">
					<label class="sr-only" for="password">password</label>
					<input id="password" name="password" type="password" class="form-control input-sm" placeholder="password">
					
				</div>
			</div>
			<div class="row">
				<div class="form-group">	
					<div class="checkbox">
						<label>
  							<input type="checkbox"> Se souvenir de moi
  						</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">	
				<button type="submit" class="btn btn-primary btn-xs">Se Connecter</button>
			</div>
		</form>
		<div class="row">
			<div class="col-md-4">
			<h3>SESSION</h3>
				<?= var_dump($_SESSION)?>;
			</div>
			<div class="col-md-4">
				<h3>SERVER</h3>
				<?= var_dump($_SERVER["REMOTE_ADDR"])?>;
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>
</html>