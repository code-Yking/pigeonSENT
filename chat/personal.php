<?php
session_start();
$name = $_GET["name"];
$_SESSION['guest'] = $name;
$user = $_SESSION['user'];
$back = "index.php";
include 'dbh.php';
include 'dbh_contact.php';
include 'dbh_chats.php';


$sql = "SELECT * FROM user WHERE uid='$name'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){
	echo "error";
	}else{


	$_SESSION['full_name'] = $row["first"]. " " . $row["last"];
echo $_SESSION['full_name'];

$table = $name . "to" . $user;
$table2 = $user . "to" . $name;

if(mysqli_num_rows(mysqli_query($conn3, "SHOW TABLES LIKE '".$table."'"))==1)  {
    
        $_SESSION['table'] = $table;
      header("Location: $back");
      
    
}
else {
   if(mysqli_num_rows(mysqli_query($conn3, "SHOW TABLES LIKE '".$table2."'"))==1)  {
  
        $_SESSION['table'] = $table2;
      header("Location: $back");
    
}
else {
   
$sql1 = "CREATE TABLE $table (
ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
USERNAME TEXT(999) NOT NULL,
MSG TEXT(999) NOT NULL,
READ_$name TEXT(999) NOT NULL,
READ_$user TEXT(999) NOT NULL,
CHATDATE TEXT(999) NOT NULL
)";
	
	
if (mysqli_query($conn3, $sql1)) {
 $_SESSION['table'] = $table;
	
	$sql4 = "SELECT * FROM $name WHERE name='$user'";
$result4 = mysqli_query($conn1, $sql4);

if (!$row4 = mysqli_fetch_assoc($result4)){
	 $sql2 = "INSERT INTO $name (name) VALUE ('$user')";
$result = mysqli_query($conn1, $sql2);

mysqli_close($conn1); 
  
  
 header("Location: $back");
	}
	else{
 header("Location: $back");
}
}	
	else{
  echo "Fail:". mysqli_error($conn3 . $conn4);
}

}
}
}
?>