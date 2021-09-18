<?php
session_start();
if (isset($_SESSION['user'])) {
} else {
  $home = "http://pigeonsent.ueuo.com";
  header("Location: $home");
}


include 'dbh_contact.php';
include 'dbh_chats.php';
include 'dbh.php';

$uid = $_SESSION['user'];
// echo $uid;


$sql = "SELECT * FROM $uid";
$result = mysqli_query($conn1, $sql);

$list = "<table>"; // start a table tag in the HTML

$s = 0;

while ($row = mysqli_fetch_array($result)) {   //Creates a loop to loop through results

  $name = $row['name'];

  $result1  = mysqli_query($conn, "SELECT * FROM user WHERE uid='$name'");
  $row1 = mysqli_fetch_array($result1);

  if ($row1['status'] == "1") {
    $status = " style='color:green' ";
  } else {
    $status = " style='' ";
  }

  // $connection1 = mysql_connect('localhost', 'username', 'password'); 
  //mysql_select_db('db');


  $table = $name . "to" . $uid;
  $table2 = $uid . "to" . $name;

  if (mysqli_num_rows(mysqli_query($conn3, "SHOW TABLES LIKE $table")) == 1) {

    $mysqli_get_users = mysqli_query($conn3, "SELECT * FROM $table WHERE READ_$uid=''");

    $get_rows = mysqli_num_rows($mysqli_get_users);

    if ($get_rows != 0) {
      $s = $get_rows + $s;
      $get_rows = "[" . $get_rows . "]";
    } else {
      $get_rows = "";
    }
  } else {

    $mysqli_get_users = mysqli_query($conn3, "SELECT * FROM $table2 WHERE READ_$uid=''");

    $get_rows = mysqli_num_rows($mysqli_get_users);

    if ($get_rows != 0) {
      $s = $get_rows + $s;
      $get_rows = "[" . $get_rows . "]";
    } else {
      $get_rows = "";
    }
  }


  $list = $list . "<tr><td>&nbsp;<a" . $status . "href='personal.php?name=$name'>" . $row['name'] . "</a> " . $get_rows . "</td></tr>";  //$row['index'] the index here is a field name

}

$list = $list . "</table>"; //Close the table in HTML

$uid = $_SESSION['user'];

$mysqli_get_users7 = mysqli_query($conn1, "SELECT * FROM $uid");

$get_rows7 = mysqli_num_rows($mysqli_get_users7);

if ($get_rows7 != 0) {
} else {
  $list = "&nbsp;Your Contacts looks empty!";
}

$_SESSION['list'] = $list;
$_SESSION['unread'] = $s;
echo $list;
if ($list == "") {
  echo "no";
}




mysqli_close(); //Make sure to close out the database connection
