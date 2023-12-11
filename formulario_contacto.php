<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destino = "tu_correo@example.com"; // Reemplaza con tu dirección de correo electrónico
    $asunto = "Nuevo mensaje de contacto";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo electrónico: $email\n";
    $contenido .= "Mensaje:\n$mensaje";

    mail($destino, $asunto, $contenido);

    // Puedes redirigir a una página de agradecimiento o mostrar un mensaje aquí
}
?>
