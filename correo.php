<?php

$destinatario = 'contacto@centrodenegociosexitosos.com';

$formulario = $_POST['formulario'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono =  $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = "Solicitud de informacion CNE pagina web";
$mensajeCompleto = "\nAtentamente: " . $nombre . "\nEmail: " . $email . "\nTelefono: " . $telefono. "\nMensaje: " . $mensaje . "\nEnviado desde el formulario: " . $formulario;

mail($destinatario, $header, $mensajeCompleto);

echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>