<?php
session_start();
$table = $_SESSION['table'];
  //   require_once('dbconnect.php');
include "dbh_chats.php";
  //   db_connect();

     $msg = $_GET["msg"];
     $dt = date("Y-m-d H:i:s");
     $user = $_SESSION['user'];

     $sql="INSERT INTO $table(USERNAME,CHATDATE,MSG,READ_$user) " .
          "values(" . quote($user) . "," . quote($dt) . "," . quote($msg) . "," . quote("1") . ");";

        //  echo $sql;

     $result = mysqli_query($conn3, $sql);
     if(!$result)
     {
        echo 'Query failed: ' . mysqli_error();
        exit();
     }

?>





