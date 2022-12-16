<?php

$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

$headers = "From: webmaster@autotvi.ro\r\n";

$message  = "<html><body>";
$message .= "<h3>Buna ma numesc ". $_POST["Name"]. "</h3>";
$message .= "<br>";
$message .= "Aceasta este adresa mea de email". $_POST["Email"];
$message .= "<br>";
$message .= "Informatii aditionale: <br>";
$message .= $_POST["Message"] ;
$message .= "</body></html>";

mail("groza.vlad.mircea@gmail.com","Mail de informare".$_POST["Name"], $message, $headers,"-fwebmaster@autotvi.ro");

?>
