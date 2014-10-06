<?php
$nombre = $_POST['name'];
$mail = $_POST['mail'];
$website = $_POST['website'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",
 website: " . $website . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'christianmancha@outlook.com';
$asunto = 'Correo enviado desde ChristianCurriculum';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("location:index.php");
?>