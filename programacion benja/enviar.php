<?php 

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "benjaminramirezhorna@gmail.com";
$asunto = "Contacto desde Nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// ENVIANDO MENSAJE
mail($destinatario, $asunto, $carta);
header('location:mensaje-de-envio.html');

?>