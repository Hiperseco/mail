<?php
$nombre = $_POST['nombre'];
$peso = $_POST['peso'];
$urlImg = $_POST['urlImg'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "c111:{ \r\n nombre: }" . $nombre . ",\r\n";





$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());


$mensaje = "Este mensaje fue enviado por " . $peso . ",\r\n";
$mensaje .= "Su e-mail es: " . $urlImg . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'joakindel95@gmail.com';
$asunto = 'Solicitud de nuevo articulo';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>