<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <title>PhP Ajax</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!--  url : http://labs.jonsuh.com/jquery-ajax-php-json/-->
  </head>
  <body>
    <div class="container">
      <h1>Demo Ajax</h1>
      <form id="idFormDemo" action="response.php" method="post">
        <input type="text" name="boisson" value="diabolo grenadine" placeholder="Boisson favorite">
        <input type="text" name="plat" value="riz au curry" placeholder="plat favori">
        <select id="" class="" name="Sexe">
          <option value="M">M</option>
          <option value="F">F</option>
          <option value="U">U</option>
        </select>
        <input type="submit" name="submit" value="submit">
      </form>
      <div class="return">

      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	  <script src="js/demo.js" type="text/javascript"></script>
  </body>
</html>
