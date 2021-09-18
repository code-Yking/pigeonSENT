<?php
session_start();
include 'dbh.php';
include 'dbh_contact.php';
$back ="http://pigeonsent.ueuo.com/Register.php";
$_SESSION['email'] = $_POST['email'];
$uid = $_POST['uid'];
if(isset($uid)){
$mysql_get_users = mysqli_query($conn, "SELECT * FROM user WHERE uid='$uid'");

$get_rows = mysqli_num_rows($mysql_get_users);
//echo $get_rows;
if($get_rows != 0)
{
$_SESSION['error2'] = "User exists";
   header("Location: $back");
}

else{

$first = $_POST['first'];
$last = $_POST['last'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];

$sql = "INSERT INTO user (first, last, uid, pwd, email, activated) VALUES ('$first', '$last', '$uid', '$pwd', '$email', '0')";
$result = mysqli_query($conn, $sql);
 
 // sql to create table
$sql1 = "CREATE TABLE $uid (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name TEXT(999) NOT NULL
)";

if (mysqli_query($conn1, $sql1)) {
   echo "Signup Complete!<br> Close this window and login through homepage";
 
  header("Location: http://pigeonsent.ueuo.com/email_verification/");
  $_SESSION['error2'] = "";
} else {
    $_SESSION['error2'] =  "Signup Error: " . mysqli_error($conn1);
  header("Location: $back");
}

mysqli_close($conn1); 
  

}
}
?>




