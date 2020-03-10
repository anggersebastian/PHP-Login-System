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
  		<div class=".uk-grid.uk-child-width-1-3@s.uk-child-width-1-1" uk-grid="">
  			<form class="uk-form-horizontal uk-margin-large js-register">
  				<h2>Register Page</h2>
			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-horizontal-text" required='required'>Email</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-horizontal-text" type="Email" placeholder="email@email.com" required='required'>
			        </div>
			    </div>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-horizontal-text" required='required'>Password</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-horizontal-text" type="Password" placeholder="type password" required='required'>
			        </div>
			    </div>

			    <div class="uk-margin"> 
				    <div class="uk-form-controls">
				    	<button class="uk-button uk-button-default" type="submit">
				    		Login
				    	</button>
				    </div>
				</div>
			</form>
  		</div>
  	</div>

    <?php require_once "config/footer.php"; ?>
    
  </body>
</html>