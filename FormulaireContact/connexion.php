<?php 
	try{
		$db= new PDO('mysql:host=localhost;dbname=MonSite;charset=utf8','root','patman00',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
	}
	catch(Exception $ex){
		die('Erreur: '.$ex->getMessage());
	}
	
	function sendmailActivationCompte($email, $token){
		$to = $email;
		$sujet = "activation de votre compte";	$message = '
	     <html>
		      <head>
		       <title>Activation du compte</title>
		      </head>
		      <body>
		      		<div>Bonjour cliquez sur ce lien pour activer votre compte</div>
		      		<a href="http://localhost/FormulaireContact/activate.php?email=' .$to. '&token=' .$token. '">Activation de compte</a>
		      </body>
		     </html>
		     ';
		$headers  = 'MIME-Version: 1.0' . "\r\n";	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		// En-têtes additionnels	$headers .= 'To: patricepetit@hotmail.com'. "\r\n";	$headers .= 'From: Patrice PETIT <petitpatrice@gmail.com>' . "\r\n";
		return mail($to,$sujet,$message,$headers);
	}	
	function findUser($email, $password, $db){
		

		$q = array(
					'email'=>$email,
					'password'=>$password
			);
		try{
			$sql = 'SELECT * FROM users WHERE email=:email AND password=:password';
			$req = $db->prepare($sql);
			$validation = $req->execute($q);
		}
		catch(Exception $ex){
			Die('Erreur' . $ex-> getMessage());
			return null;
		}
		$count = $req->rowcount();
		if ($count ==1){
			$données = $req-> fetchAll()[0];

			var_dump($données['active']);
			if($données['active'] == 1){
				$_SESSION['auth']['email'] = $données['email'];
				$_SESSION['auth']['password'] = $données['password'];
				header('Location:compte.php');
			} else {
				return $false;
			}
		}
		return $validation;
	}
	function insertUser($firstname, $email, $password, $db){
		$password = sha1($password);
		$token = sha1(uniqid(rand()));
		
		$q = array('firstname'=>$firstname,
					'email'=>$email,
					'password'=>$password,
					'token' => $token

			);

		try{
			$sql = 'INSERT INTO users(username,email,password,token) VALUES(:firstname,:email,:password,:token)';
			$req = $db->prepare($sql);
			$req->execute($q);
		}
		catch(Exception $ex){
			// var_dump($ex);
			if ($ex->getCode() == 23000) // email deja dans la base de donnée
			// die('Erreur: '.$ex->getCode());
			return $ex->getCode();
		}
		// tester si la requete insert a echouer
		return $token;
	}

	function checkActivationAccount($email, $token, $db){
		$q = array(
					'email'=>$email,
					'token'=>$token

					);

		$sql = 'SELECT * FROM users WHERE email=:email AND token=:token';
		$req = $db->prepare($sql);
		$validation = $req->execute($q);
		return $req;
	}

	function ActivateAccount($email, $token, $db){
		$q = array(
					'email'=>$email,
					'token'=>$token

					);

		$sql = 'SELECT * FROM users WHERE email=:email AND token=:token';
		$req = $db->prepare($sql);
		$validation = $req->execute($q);
		$count = $req->rowcount();
		var_dump($count);
		if ($count==1){
			if($req->fetchAll()[0]['active'] == 0){
				$sql = 'UPDATE users SET active=1 WHERE email=:email';
				$v = array("email"=>$email);
				$req = $db->prepare($sql);
				$req->execute($v);
				$message["activated"] = "Le compte est désormais actif";
			} else {
				$message["alreadyActivated"] = "Le compte est deja activé";
			}
			
		}else{
			$message["prob"] ="Un probleme est apparu"; 
		}
		// var_dump($message);
		return $message;
	}
?>