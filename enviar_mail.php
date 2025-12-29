<?php
$nombre   = $_POST['nombre'] ?? '';
$apellido = $_POST['apellido'] ?? '';
$email    = $_POST['email'] ?? '';
$celular  = $_POST['celular'] ?? '';

$para = "info@fgwordpress.com.ar";
$asunto = "Nuevo interesado MercadoPago";
$mensaje = "
Nombre: $nombre
Apellido: $apellido
Email: $email
Celular: $celular
";

$headers = "From: Notificaciones <no-reply@fgwordpress.com.ar>\r\n";

if (mail($para, $asunto, $mensaje, $headers)) {
    echo "OK";
} else {
    echo "ERROR";
}
?>