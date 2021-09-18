<?php
session_start();
include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$error = "http://pigeonsent.ueuo.com/index.php#features";
$cs = "http://pigeonsent.ueuo.com/chat";
$admin = "http://pigeonsent.com/admin";
$sql = "SELECT * FROM user WHERE uid LIKE BINARY'$uid' AND pwd LIKE BINARY '$pwd'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){
	$_SESSION['error'] = "Wrong Credentials" . mysqli_error($conn1);
	header("Location: $error");
	}else{
		$_SESSION['user'] = $_POST['uid'];

	$_SESSION['table'] = "";
	$_SESSION["name"] = "";
	$_SESSION["contact"] = "";
	$_SESSION["error"] = "";
	$_SESSION["full_name"] = "";
	
	
	$sql1 = "UPDATE user SET status = '1' WHERE uid = '$uid'";
$result = mysqli_query($conn, $sql1);
	
	header("Location: $cs");
	
		 
//$data1 = "http://pigeonsent.com/chat/new.php?id=";
//$final = $data1 . '' . $uid;
//header("Location: $final");

} 

?>
