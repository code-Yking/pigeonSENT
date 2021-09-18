<?php
session_start();

    $uid = $_SESSION['user'];
//echo $uid;
include 'dbh.php';
$sql = "SELECT * FROM user WHERE uid='$uid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo $row["activated"];}
    }else {
    echo "0 results";
}

mysqli_close($conn);

?>