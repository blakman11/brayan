<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Correo de destino
    $to = 'gilb89521@gmail.com';  // Tu correo electrónico
    $subject = 'Nuevo mensaje desde el formulario de contacto';
    
    // Contenido del correo
    $message = "Nombre: " . $nombre . "\n";
    $message .= "Correo Electrónico: " . $email . "\n";
    $message .= "Mensaje: \n" . $mensaje;
    
    // Encabezados
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "El mensaje fue enviado con éxito.";
    } else {
        echo "Hubo un error al enviar el mensaje. Intenta nuevamente.";
    }
}
?>
