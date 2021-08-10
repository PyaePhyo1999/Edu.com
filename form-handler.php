<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from ='info@yourwebsite.com';
$email_subject = 'New form Submission';

$email_body = 'User Name : $name.\n'.
'User Email : $email.\n'.
'Subject : $subject.\n'.
'User Message : $message.\n';

$to = 'ppm421999@gmail.com';
$header = 'From $email_from \r\n';

$header .= 'Reply to $email \r\n';

mail($to,$email_subject,$email_body,$header);
header('location : contact.html');




?>