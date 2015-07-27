<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Activation de votre compte</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="./css/custom.css" rel="stylesheet">
  </head>
<body>
	<?= var_dump($message);?>
	<div class="containter">
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


</body>
</html>