<?php 

// if (is_ajax()) {
  if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
    $action = $_POST["action"];
    var_dump('$action');
    switch($action) { //Switch case for value of action
      case "test": test_function(); break;
    }
  }
// }

//Function to check if the request is an AJAX request
function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

function test_function(){
  $return = $_POST;
  
  //Do what you need to do with the info. The following are some examples.
  //if ($return["favorite_beverage"] == ""){
  //  $return["favorite_beverage"] = "Coke";
  //}
  //$return["favorite_restaurant"] = "McDonald's";
  
  $return["json"] = json_encode($return);
  echo json_encode($return);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>PhP Ajax</title>
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Demo Ajax</h1>
		<form id="favoriForm" action="response.php" method="POST">
			<input type="text" name="boisson"  value="diabolo grenadine" placeholder="Boisson Favorie">
			<input type="text" name="plat"  value="riz au curry" placeholder="Plat Favori">
			<select name="sexe" id="">
				<option value="M">M</option>
				<option value="F">F</option>
			</select>
			<input type="submit" name="submit" value="Submit Form">		
		</form>
		<div class="return">
			
		</div>
	</div>
	<script src="../jQuery/js/dist/jquery.js" type="text/javascript"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="demo.js" type="text/javascript"></script>
</body>
</html>