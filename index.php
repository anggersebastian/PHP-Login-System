<?php 
	
	// allow the config
	define('__CONFIG__', true);
	// require the config
	require_once "config/config.php" ; 


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.3/dist/css/uikit.min.css" />

    <title>Hello, world!</title>
  </head>
  <body>
    
  	<div class="uk-section uk-container">
  		<?php 
  			echo "hello world. Today is: "; 
  			echo date("Y m d");

  		?>
  		<br>
  		<a href="login.php">Login?</a>
  		<a href="Register.php">Register?</a>

  	</div>

    <?php require_once "config/footer.php"; ?>
    
  </body>
</html>