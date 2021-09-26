<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['phone'];
$message = $_POST['message'];
$formcontent=" From: $name \n Subject: $subject \n Message: $message";
$recipient = "bm.pandya2710@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' > Return Home</a>";
?>
