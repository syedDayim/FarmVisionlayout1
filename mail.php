<?php
// Capture form data
$firstn = $_POST['firstn'];
$lastn = $_POST['lastn'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Prepare email content
$formcontent = "First Name: $firstn \nLast Name: $lastn \nEmail: $email \nPhone: $phone \nSubject: $subject \nMessage: $message";
$recipient = "info@farmvision.in"; // Your email address
$mailheader = "From: $email \r\n";

// Send email
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

// Redirect to thankyou.html
header("Location: thankyou.html");
exit();
?>
