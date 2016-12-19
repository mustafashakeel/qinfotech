

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['phone'];
$dest ="mustafa.shakeel@gmail.com";
$headers = "From: $name <$email>\r\n";  
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
$subject = "[QInfotech Solutions Contact Form]";
$body = "Name: ".$name."<br>";
$body .= "Email: ".$email."<br>";
$body .= "Phone#: ".$message;
 
if($name != '' && $email != '' && $message != ''){
    mail($dest,$subject,$body,$headers);
}
?>