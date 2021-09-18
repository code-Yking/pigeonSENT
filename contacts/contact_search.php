<?php
session_start();
include 'dbh.php';
$back = "index.php";
$uid = $_POST['search'];

$sql = "SELECT * FROM user WHERE uid='$uid'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){
		$_SESSION['error'] = "Username doesn't exist";
	$_SESSION['name'] = "";
	header("Location: $back");
	}else{
		$_SESSION['name'] = $row["first"]. " " . $row["last"];
	$_SESSION['contact'] = $_POST['search'];
header("Location: $back");
}


