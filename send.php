<?php

$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$size = $_POST['size'];
$message = $_POST['message'];

$to = "info@neon.cz";
$subject = "Nová poptávka kanceláře";

$body = "
Jméno: $name

Firma: $company

Email: $email

Telefon: $phone

Velikost: $size

Zpráva:
$message
";

$headers = "From: $email";

mail($to, $subject, $body, $headers);

header("Location: dekujeme.html");

?>