<?php

// Obtenemos los datos del formulario
$correo_remitente = $_POST['email'];
$mensaje = $_POST['site'];

//encode email

$email = "email@okmarketing.xyz";
$enconde_email = base64_encode($email);

// Enviamos el correo electrónico
mail($enconde_email, "SEO score for: $mensaje", "From: $correo_remitente");

// Mostramos un mensaje de confirmación
echo "Gran paso! enviaste tu website para evaluación. Te responderemos en breve <a href='#'> Regresar </a> ";

?>

