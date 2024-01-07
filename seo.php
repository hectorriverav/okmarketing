<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopilar datos del formulario
    $site = $_POST["site"];
    $email = $_POST["email"];
    
    // Destinatario del correo electrónico
    $to = "email@okmarketing.xyz";

    // Asunto del correo electrónico
    $subject = "Nuevo: auditoria SEO";

    // Mensaje del correo electrónico
    $email_message = "Site: $site\n";
    $email_message .= "email: $email\n";
    
    // Cabeceras del correo electrónico
    $headers = "From: $site\r\n";
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
