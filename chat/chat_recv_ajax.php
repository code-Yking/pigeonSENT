<?php
session_start();
 $table = $_SESSION['table'];
     //require_once('dbconnect.php');
include "dbh_chats.php";
$uid = $_SESSION['user'];
  //   db_connect();
    
     $sql = "SELECT *, date_format(chatdate,'%d-%m-%Y %r') as cdt from $table order by ID desc limit 200";
     $sql = "SELECT * FROM (" . $sql . ") as ch order by ID";
     $result = mysqli_query($conn3, $sql) or die('Select a contact to chat with.');
     
     // Update Row Information
     $msg="<table border='0' style='font-size: 10pt; color: blue; font-family: verdana, arial;'>";
     while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC))
     {
       if ($line["USERNAME"] == $_SESSION['user']){
        $user = "You";
         
          $unread_user = 'READ_' . $_SESSION['guest'];
       if($line[$unread_user] == "1"){
         $read = "[Read]";
       }else{
         $read = "[Delivered]";
         
       } 
         
       }else{
        $user = $line["USERNAME"];
         $read ="";
         
       }
 $nohtml  =  htmlspecialchars($line["MSG"]);     
       
           $msg = $msg . "<details>" . $line["cdt"] . "&nbsp;" . $read . "&nbsp;" .
                "<summary>" . $user . ":&nbsp;" 
                 .  $nohtml . "</summary></details>";
     }
     $msg=$msg . "</table>";
     
include 'dbh_chats.php';
$sql1 = "UPDATE $table SET READ_$uid = '1' WHERE READ_$uid = ''";
$result = mysqli_query($conn3, $sql1);

echo $msg;
     
?>





