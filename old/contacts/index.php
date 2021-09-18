<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body style="background: #FF4D27; ">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_orange-orange.min.css" />
  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  
  <!-- Left aligned menu below button -->
<button id="demo-menu-lower-left"
        class="mdl-button mdl-js-button mdl-button--icon">
  <i class="material-icons">more_vert</i>
</button>

<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
    for="demo-menu-lower-left">
  <li class="mdl-menu__item">Some Action</li>
  <li class="mdl-menu__item mdl-menu__item--full-bleed-divider">Another Action</li>
  <li disabled class="mdl-menu__item">Disabled Action</li>
  <li class="mdl-menu__item">Yet Another Action</li>
</ul>

  
  <form action="contact_search.php" method="POST">
<h4>Contact Search</h4>
<h7 >Username: &nbsp</h7><input type="text" placeholder="Enter Username" name="search" id="Search" required><br>

<br>
<button type="submit" style="float:middle">Search</button>&nbsp
</form>
  
  <br>
  <h4>
    Possible Result:
  </h4><br>
<?php
$name = $_SESSION["name"];
  
if($_SESSION["name"] == ""){
    echo	$_SESSION['error'];}
else{
// Echo session variables that were set on previous page
echo  "Full Name: ". $_SESSION["name"];
   echo "<br>Username: ". $_SESSION['contact'] . ".<br> <a href='add_contact.php'>Add to Contacts</a><br>";

}
   
     
?>

</body>
</html>