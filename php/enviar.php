<?php
$nombre = $_POST['nombre'];
$puesto = $_POST['puesto'];
$empresa = $_POST['empresa'];
/* $area = $_POST['area']; */
$area = $_POST['_combo'];
$etiquetas = $_POST['etiquetas'];
$correo = $_POST['correo'];
$numero = $_POST['numero'];
$mensaje = $_POST['mensaje'];

/* echo "Hola $nombre tu puesto es: $puesto tu empresa es $empresa las etiquetas que deseas son $area 
la cantidad son $etiquetas su correo es $correo y su número es $numero"; */

$header = 'From: ' . $correo . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$message .= "Empresa: " . $empresa . " \r\n";
$message .= "Su e-mail es: " . $correo . " \r\n";
$message .= "Telefono de contacto: " . $numero . " \r\n";
$message .= "Tipo de etiqueta a cotizar: " . $area . " \r\n";
$message .= "Cantidad de etiquetas a cotizar: " . $etiquetas . " \r\n";
$message .= "Comentarios sobre cotizacion: " . $mensaje . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());


$para = 'Clients@orkelim.com';
$asunto = 'Nueva Cotizacion';

@mail($para, $asunto, utf8_decode($message), $header);

header("Location:/Inicio");
