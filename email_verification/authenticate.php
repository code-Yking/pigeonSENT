<?php
session_start();
 $uid = $_SESSION['user'];
$truecode = $_SESSION['rand'];
$code = $_POST['code'];

if($truecode == $code){
  include 'dbh.php';
$sql1 = "UPDATE user SET activated = '1' WHERE uid = '$uid'";
$result = mysqli_query($conn, $sql1);
  echo "Done! Please login from main Window.";
  $_SESSION[’rand’] = "";
}else{
  $_SESSION['verif_error'] = "Incorrect Code!";
  header("Location: index.php");
}
?>