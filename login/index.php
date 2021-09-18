<?php
session_start();
$iid = $_GET['error'];
?>
<!DOCTYPE html>

<html >
 
 <head>
   
 <meta charset="UTF-8">
  
  <title>Login</title>
    
    
    
 
   
        <link rel="stylesheet" href="css/style2_.css">

    
    
    
 
 </head>

 
 <body>

   
 <div class="wrapper">
	
<div class="container">
		
<h1 id="demo">Welcome</h1>
	
	
		<form action="login.php" method="POST">
		
	<input type="text" placeholder="Username" name="uid" id="Uid"/>
		
	<input type="password" placeholder="Password" name="pwd"/>
			
<button type="submit" id="login-button"> Login</button>
	
<br>
<?php
if (isset($_SESSION['id'])){
	
	}else{
		
	}
echo "<span style='color:#FF0000;text-align:center;'> $iid </span> ";
?><br><br>
Don't have an account?? <a href="Register.php">Register here. </a> <br>Forgot Password?? <a href="ForgotPassword.php"> Get an hand here.</a>
</form>
	
</div>
	

<ul class="bg-bubbles">
		
<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

     

    
  <footer>All rights Reserved</footer>  
    
  </body><footer>All rights Reserved</footer>
</html>
