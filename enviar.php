<?php

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$destinatario = "valentinatoro0603@gmail.com";
$asunto = "Solucitud de inscripcion en taller de verano - shuffle basico";

$carta = "De: $nombre \n";
$carta .= "whatsapp: $telefono \n";
$carta .= "correo: $correo \n";
$carta .= "mensaje: $mensaje";

mail($destinatario, $asunto, $carta);
header('location:mensaje-enviado.php');

?>
