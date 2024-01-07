<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopilar datos del formulario
    $site = $_POST["site"];
    $email = $_POST["email"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Destinatario del correo electrónico
    $to = "email@okmarketing.xyz";

    // Asunto del correo electrónico
    $subject = "Nuevo: formulario de contacto";

    // Mensaje del correo electrónico
    $email_message = "Site: $site\n";
    $email_message .= "email: $email\n";
    $email_message .= "Name: $name\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Message: $message\n";

    // Cabeceras del correo electrónico
    $headers = "From: $name\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Intentar enviar el correo electrónico
    if (mail($to, $subject, $email_message, $headers)) {
        // Éxito al enviar el correo
        header("Location: confirmacion.html");
        exit();
    } else {
        // Error al enviar el correo
        echo "Error al enviar el formulario. Por favor, inténtelo de nuevo.";
    }
} else {
    // Redireccionar si se accede directamente a este script sin enviar el formulario
    header("Location: index.html");
    exit();
}
?>
