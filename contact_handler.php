<?php

$name=$_POST['name'];
$email=$_POST['message'];

$email_from='instee@ecommerce.com';
$email_subject="new form Submission";
$email_body="User Name: $name .\n"."User Email:$email.\n". "User Message:$message .\n";



$to="maricris052298dejesus@gmail.com";
$headers="From:  $email_from \r\n";
$headers .="Replay to: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.php");




?>