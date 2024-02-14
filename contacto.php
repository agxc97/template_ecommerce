<?php

$enviado = '';
$errores = '';

// <?php echo htmlspecialchars($_SERVER['PHP_SELF']); 

if (isset($_POST["submit"])) {
    $errores = '';
    $enviado = '';

    if (isset($_POST["submit"])) {
        $nombre = $_POST['nombre'];
        $asunto = $_POST['asunto'];
        $email = $_POST['email'];
        $telefono = $_POST['tel'];
        $mensaje = $_POST['mensaje'];

        if (empty($nombre)) {
            $errores .= 'Por favor, agrega un nombre <br />';
        } else {
            $nombre = strip_tags($nombre);
            // echo "Tu nombre es: $nombre <br />";
        }

        if (empty($asunto)) {
            $errores .= 'Por favor, agrega un asunto <br />';
        } else {
            $asunto = strip_tags($asunto);
            // echo "Tu asunto es: $asunto <br />";
        }

        if (empty($email)) {
            $errores .= 'Por favor, agrega un correo  <br />';
        } else {
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errores .= 'Por favor, agrega un correo válido  <br />';
            }
            // echo "Tu email es: $email <br />";
        }

        if (empty($telefono)) {
            $errores .= 'Por favor, agrega un telefono <br />';
        } else {
            $telefono = filter_var($telefono, FILTER_SANITIZE_NUMBER_INT);
            // echo "Tu telefono es: $telefono <br />";
        }

        if (empty($mensaje)) {
            $errores .= 'Por favor, agrega un mensaje <br />';
        } else {
            $mensaje = htmlspecialchars($mensaje);
            $mensaje = trim($mensaje);
            $mensaje = stripslashes($mensaje);
            $mensaje = strip_tags($mensaje);
        }

        if (!$errores) {
            $enviar_a = 'andreu@afinformatica.com';
            $asunto = "Correo enviado desde $enviar_a";
            $mensaje_preparado = "De: $nombre \n";
            $mensaje_preparado .= "Correo: $email \n";
            $mensaje_preparado .= "Mensaje: $mensaje";

            mail($enviar_a, $asunto, $mensaje_preparado);
            $enviado = 'true';
        }
    }
}

require 'contacto.view.php';

?>