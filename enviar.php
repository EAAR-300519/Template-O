<?php
$nombre = $_POST['nombre'];
$puesto = $_POST['puesto'];
$empresa = $_POST['empresa'];
$area = $_POST['area'];
$etiquetas = $_POST['etiquetas'];
$correo = $_POST['correo'];
$numero = $_POST['numero'];
$mensaje = $_POST['mensaje'];

echo "Hola $nombre tu puesto es: $puesto tu empresa es $empresa las etiquetas que deseas son $area 
la cantidad son $etiquetas su correo es $correo y su número es $numero";

$header = 'From: ' . $correo . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$message = "Empresa: " . $empresa . " \r\n";
$message .= "Su e-mail es: " . $correo . " \r\n";
$message .= "Teléfono de contacto: " . $numero . " \r\n";
$message .= "Tipo de etiqueta a cotizar: " . $etiquetas . " \r\n";
$message .= "Comentarios sobre cotización: " . $_POST[$mensaje] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());


$para = 'aspire5@outlook.es';
$asunto = 'Mensaje de Prueba';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
