<!doctype html>
<html lang="en">
  <head>

    <title>Register</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_orange-orange.min.css" />
    <link rel="stylesheet" href="styles.css">
  
  </head>
  <body>
   
                <h4>Register :</h4>
															<form action="login/signup.php" method="POST" id="RegisterForm">

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="FN" name="first" required/>
    <label class="mdl-textfield__label" for="FN">First Name</label>
  </div>
<br>
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" id="LN" type="text" name="last" required/>
    <label class="mdl-textfield__label" for="LN">Last Name</label>
  </div>													<br>
<br>		
																			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" id="UN" type="text" name="uid"  required/>
    <label class="mdl-textfield__label" for="UN">User Name</label>
  </div>			
<br>
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" id="PIN" type="password" name="pwd"  required/>
    <label class="mdl-textfield__label" for="PIN">Password</label>
  </div>	<br>
			
																		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" id="EM" name="email" type="email"  required/>
    <label class="mdl-textfield__label" for="EM">E-Mail</label>
  </div>
<br>
	
<br>
		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"  type="submit" id="RegisterButton">
  Sign Up!
</button>														
	
<?php
																session_start();
			echo "&nbsp;" . $_SESSION['error2'];
			?>
</form>
					
					
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  </body>
</html>
