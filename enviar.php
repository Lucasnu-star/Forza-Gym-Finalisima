<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$header = 'De: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por  " . "$name" . ",\r\n";
$message .= "Su e-mail es: " . "$email" . " \r\n";
$message .= "Mensaje: " . "$_POST['message']" . " \r\n";
$message .= "Enviado el " . date('d/m/Y', time());

$for = 'lucasnunezt5@gmail.com';
$subjet = 'Mensaje de asunto';

mail($for, $subjet, utf8_decode($message), $header);

header("Location:ty.html");
?>