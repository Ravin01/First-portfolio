<?php
$name = $_POST['name'];
$visitor_email; = $_POST['email'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "user Name: $name.\n".
               "user Email: $cisitor_email.\n".
                "user Message: $message.\"n;

$to = 'ravinganapathi@gmail.com';

$header = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?> 