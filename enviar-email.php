<?php
// Recuperar los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Configurar el correo electrónico
$para = "eaxel2116@gmail.com";
$asunto = "Mensaje desde tu página web de vapes";
$contenido = "Nombre: $nombre\n";
$contenido .= "Correo Electrónico: $email\n\n";
$contenido .= "Mensaje:\n$mensaje";

// Enviar el correo electrónico
if(mail($para, $asunto, $contenido)) {
    echo "¡Mensaje enviado con éxito!";
} else {
    echo "Error al enviar el mensaje. Por favor, inténtalo nuevamente.";
}
?>
