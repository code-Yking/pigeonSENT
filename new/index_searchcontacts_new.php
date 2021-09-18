<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body style="background: #FF4D27; ">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_orange-orange.min.css" />
  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  
 
  <form action="contact_search.php" method="POST">
<h4>Contact Search</h4>
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name="search" id="Search" required>
    <label class="mdl-textfield__label" for="Search">User Name</label>
  </div><br>

<br>
	<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
  <i class="material-icons">search</i>
</button>&nbsp

</form>
  
  <br>
  <h4>
    Possible Result:
  </h4><br>
	<script>
	function signup() {
    window.open("http://pigeonsent.ueuo.com/contacts/add_contact.php")
}
</script>
<?php
$name = $_SESSION["name"];
  
if($_SESSION["name"] == ""){
    echo	$_SESSION['error'];}
else{
// Echo session variables that were set on previous page
echo  "Full Name: ". $_SESSION["name"];
   echo "<br>Username: ". $_SESSION['contact'] . ".<br> <button class='mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored' a onclick='signup()'>
  <i class='material-icons'>add</i>
</button>";

}
   
     
?>

</body>
</html>