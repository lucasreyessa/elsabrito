<?php
// Recoge los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Configura el correo al que quieres enviar el mensaje
$destinatario = "bq6edwin@gmail.com";
$asunto = "Nuevo mensaje de contacto desde el formulario";

// Construye el cuerpo del mensaje
$contenido = "Nombre: $nombre\n";
$contenido .= "Email: $email\n";
$contenido .= "Mensaje:\n$mensaje";

// Envía el correo
$exito = mail($destinatario, $asunto, $contenido);

// Verifica si el correo se envió correctamente
if ($exito) {
    echo "El mensaje ha sido enviado correctamente.";
} else {
    echo "Hubo un error al enviar el mensaje. Por favor, intenta de nuevo más tarde.";
}
?>
