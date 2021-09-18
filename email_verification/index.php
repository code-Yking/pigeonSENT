<?php
session_start();
if(isset($_SESSION['rand'])){
      
    }else{
      $rand = rand(10000,99999);
      $_SESSION['rand'] = $rand;
      
    }

?>

<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_orange-orange.min.css" />
    <link rel="stylesheet" href="styles.css">
    </head>
  <body>
    <h4>Email Verification</h4>
    <br>
  <form action="authenticate.php" method="POST">
    
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="FN" name="code" required/>
    <label class="mdl-textfield__label" for="FN">Verification Code</label>
  </div><br>
  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"  type="submit" id="RegisterButton">
  Verify
</button>	
    <a href="function.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"  type="submit" id="RegisterButton">
  Send
</a><br>
   <p> Note: Kindly check your Spam/Junk folder for the Verification code.</p>
</form>
   <?php
    echo "&nbsp;" . $_SESSION['verif_error'];
    ?>
</body>
  </html>