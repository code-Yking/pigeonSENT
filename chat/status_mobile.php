<?php
session_start();
if (isset($_SESSION['user'])) {
} else {
  $home = "http://pigeonsent.ueuo.com";
  header("Location: $home");
}


include 'dbh_contact.php';
include 'dbh_chats.php';

$uid = $_SESSION['user'];

$connection = mysql_connect('localhost', 'username', 'password'); //The Blank string is the password
mysql_select_db('dbdb3');

$query = "SELECT * FROM $uid"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

$list = "<table>"; // start a table tag in the HTML

$s = 0;

while ($row = mysql_fetch_array($result)) {   //Creates a loop to loop through results

  $name = $row['name'];
  $result1  = mysql_query("SELECT * FROM dbdb2.user WHERE uid='$name'");
  $row1 = mysql_fetch_array($result1);

  if ($row1['status'] == "1") {
    $status = " style='color:green' ";
  } else {
    $status = " style='' ";
  }

  $connection1 = mysql_connect('localhost', 'username', 'password');
  mysql_select_db('db');


  $table = $name . "to" . $uid;
  $table2 = $uid . "to" . $name;

  if (mysql_num_rows(mysql_query("SHOW TABLES LIKE '" . $table . "'")) == 1) {

    $mysql_get_users = mysqli_query($conn3, "SELECT * FROM $table WHERE READ_$uid=''");

    $get_rows = mysqli_num_rows($mysql_get_users);

    if ($get_rows != 0) {
      $s = $get_rows + $s;
      $get_rows = "[" . $get_rows . "]";
    } else {
      $get_rows = "";
    }
  } else {

    $mysql_get_users = mysqli_query($conn3, "SELECT * FROM $table2 WHERE READ_$uid=''");

    $get_rows = mysqli_num_rows($mysql_get_users);

    if ($get_rows != 0) {
      $s = $get_rows + $s;
      $get_rows = " [" . $get_rows . "]";
    } else {
      $get_rows = "";
    }
  }

  $list = $list . "<tr><td>&nbsp;<a" . $status . "href='personal_mobile.php?name=$name'>" . $row['name'] . "</a> " . $get_rows . "</td></tr>";
  //$list= $list . "<li><a" .$status . "href='personal_mobile.php?name=$name'><h3>" . $row['name'] . $get_rows ."</h3><p> Online" . "</p></a></li>";  //$row['index'] the index here is a field name

}

$list = $list . "</table>"; //Close the table in HTML


$uid = $_SESSION['user'];

$mysql_get_users7 = mysqli_query($conn1, "SELECT * FROM $uid");

$get_rows7 = mysqli_num_rows($mysql_get_users7);

if ($get_rows7 != 0) {
} else {
  $list = "&nbsp;Your Contacts looks empty!";
}

$_SESSION['list'] = $list;
$_SESSION['unread'] = $s;
echo $list;




mysql_close(); //Make sure to close out the database connection
