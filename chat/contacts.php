<?php
session_start();
include 'dbh_contact.php';
include 'dbh.php';
$uid = $_SESSION['user'];

$connection = mysql_connect('localhost', 'username', 'password'); //The Blank string is the password
mysql_select_db('dbdb3');

$query = "SELECT * FROM $uid"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML

while ($row = mysql_fetch_array($result)) {   //Creates a loop to loop through results
  $name = $row['name'];

  $sql1 = "SELECT * FROM user WHERE uid='$name'";
  $result1 = mysqli_query($conn, $sql1);

  $full_name = $row1["first"] . " " . $row1["last"];

  echo "<tr><td><a href='personal.php?$name='>" . $full_name . "</a></td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

mysql_close(); //Make sure to close out the database connection
