<?php
session_start();
include 'dbh_contact.php';
$uid = $_SESSION['user'];
$contact = $_SESSION['contact'];

$back ="http://pigeonsent.ueuo.com/chat";

if($uid == $contact){
  echo "You can't add yourself!";
  
}else{
$mysql_get_users = mysqli_query($conn1, "SELECT * FROM $uid WHERE name='$contact'");

$get_rows = mysqli_num_rows($mysql_get_users);

if($get_rows == 0)
{
  $sql = "INSERT INTO $uid (name) VALUE ('$contact')";
$result = mysqli_query($conn1, $sql);
echo "Contact Added.";
 
}
else{
echo "Contact aldready  exists";
  
}
}