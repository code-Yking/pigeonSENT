<?php

$conn3 = mysqli_connect("localhost", "username", "password", "db");
$echo = "Internal Server Error. Please try later.";

if (!$conn3) {
	echo $echo;
}
