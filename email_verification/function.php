<?php
session_start();
$to      = $_SESSION['email'];
$subject = 'Verification Code for PigeonSENT';
$message = 'Hey there! This is your verification code for activating your PigeonSENT account: '. $_SESSION['rand'] ;
$headers = 'From: noreply@pigeonsent.com' . "\r\n" .
    
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
header("Location: index.php");
?> 