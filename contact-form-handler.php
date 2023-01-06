<?php
$name = $_post['name']
$visitor_email = $_['email']
$message = $_Post['message']
    


$email_from = 'stholemduew@gmailcom'
$email_subject ="new form submission"
$email_body ="user name: $name.\n"
"user email: $visitor_email.\n".
    "user message: $message.\n";

$to = "geeksmadtech@gmail.com";
$headers = "from: $email_from\r\n";
$headers ="reply-to:$visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("location: index.html");

?>

