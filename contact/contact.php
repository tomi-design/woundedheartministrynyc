<?php

$name = $_POST['name'];
$visitor_email = $_Post['email'];
$subject = $_POST['subject'];


$email_from = "tomoiwamoto21@gmail.com";

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".   
                "User Email: $visitor_email.\n".   
                    "User Subject: $subject.\n";


$to = "tomoiwamoto21@gmail.com";

$headers = "From: $email_from \r\n";

$header . = "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location": index.html");



?>