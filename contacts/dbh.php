<?php

$conn = mysqli_connect("localhost", "username", "password", "dbdb2");
$echo = "Internal Server Error. Please try later.";
if (!$conn) {
	echo $echo;
}
