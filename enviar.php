<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$contenido = "¡Hola Equipo de Atomblack Games! \n
            Yo, $nombre, Deseo Suscribirme via E-Mail para recibir noticias.";

$header = 'From: ' . $mail . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su email es: " . $mail . "\r\n";
$mensaje .= "Mensaje: " . $contenido . "\r\n";
$mensaje .= "Enviado el " . date('d/m/y', time());

$para = 'atomblackgames@gmail.com';
$asunto = 'Petición de suscripción';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.php");

?>