<?php
$home = "http://pigeonsent.ueuo.com";
session_start();
  $uid = $_SESSION['user'];
header("Location: $home");
include 'dbh.php';
$sql1 = "UPDATE user SET status = '0' WHERE uid = '$uid'";
$result = mysqli_query($conn, $sql1);
session_destroy();
?>