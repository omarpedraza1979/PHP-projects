<?php

//llamando a los campos
$nombre   = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];


//datos para el correo
$destinatario ="omar.pedraza@hpe.com";
$asunto       ="contacto desde nuestra web";
$carta  = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje \n";

//enviando mensaje
mail($destinatario,$asunto,$carta);
header('Location:mensaje_envio.html'); 

?>
