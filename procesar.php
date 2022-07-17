<?php
 
$nombre               = $_POST['nombre'];
$email                = $_POST['email'];
$fechainteres         = $_POST['fechainteres'];
$telefono             = $_POST['telefono'];

$opinion              = "<h1>" .$nombre. "</h1>";
$opinion             .= "<p> La fecha de interes a viajar es:" .$fechainteres. "</p>"; 
$opinion             .= "<p> El telefono es: " .$telefono.  "</p>";
$opinion             .= $_POST['opinion'];

$para                 = 'marianelafernandescanosa96@gmail.com';

$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
$headers .= "From: $email\r\n";
$headers .= "To: $para\r\n";

mail( $para , "Opinion desde la web", $opinion, $headers );
header("Location: gracias.html");

?>