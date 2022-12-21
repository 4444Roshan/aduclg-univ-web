<?php 
$name=$_POST['name'];
$viditor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='website1.com';
$email_subject='new form submission';
$email_body="user name: $name.\n".
            "user email:$visitor_email.\n".
            "subject:$subject.\n".
            "user message:$message.\n";

$to='sishyaclan@gmail.com';
$header="From:$email_from \r\n";
$header .="Reply-To:$visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location:contact.html");
?>