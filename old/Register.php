<?php
session_start();
?>
<!DOCTYPE html>

<html >
 
 <head>
   
 <meta charset="UTF-8">
  
  <title>Register</title>

 </head>

 
 <body style="background: #bfbfbf;">
 <div class="wrapper">
	
<div class="container">
		
<h1 id="demo">Sign Up</h1>
	
	
		<form action="login/signup.php" method="POST" id="RegisterForm">


<input type="text" name="first" placeholder ="Firstname" required/><br>
<input type="text" name="last" placeholder ="Lastname" required/><br>
<br>		
	<input type="text" name="uid" placeholder="Username" required/><br>
		
	<input type="password" name="pwd" placeholder="Password" required/><br>
			
<input name="email" type="email" placeholder="Email" placeholder="Email" required/><br>
	
<br>
<button type="submit" id="RegisterButton">Sign Up</button>
	<br><br>
<?php
			echo $_SESSION['error'];
			?>
</form>
	
</div>
	

<script>
function myFunction() {
    document.getElementById("demo").innerHTML = "Thank You";
}
</script>	

</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        

    
    
    
  </body>
</html>
