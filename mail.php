<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$number = $_POST['mobile'];

$to = "opuzmoses@gmail.com";

$subject = "Mail from code";
$txt = "Name = " . $name . "\r\n Email = " . $email . "\r\n Message =" . $message . " \r\n Mobile number =" . $number;
$headers = "from: noreply@dark.com" . "\r\n" . "CC: somebodyelse@example.com";
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

header("Location: www.google.com");
