<?php

$conn1 = mysqli_connect("localhost", "username", "password", "dbdb3");
$echo = "Internal Server Error. Please try later.";
if (!$conn1) {
	echo $echo;
}
