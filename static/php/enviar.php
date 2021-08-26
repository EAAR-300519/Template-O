
<?php
$nombre = $_POST['nombre'];
$puesto = $_POST['puesto'];
$empresa = $_POST['empresa'];
/* $area = $_POST['area']; */
$tipo = $_POST['tipo'];
$etiquetas = $_POST['etiquetas'];
$correo = $_POST['correo'];
$numero = $_POST['telefono'];
$mensaje = $_POST['comentarios'];

/* echo "Hola $nombre tu puesto es: $puesto tu empresa es $empresa las etiquetas que deseas son $area 
la cantidad son $etiquetas su correo es $correo y su número es $numero"; */

/* $header = 'From: ' . $correo . " \r\n";
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
$message .= "Enviado el: " . date('d/m/Y', time()); */
/* $to = "recklessmoney3@gmail.com"; */
$to = "alejandrocamperoupvm@gmail.com";
/* $destino2 = "alejandrocamperoupvm@gmail.com"; */
$subject = "Cotizacion OrKelim";

/* $Aceptacion = "Uso Exlusivo" . $exclusive . "\nSolicitud de informacion: " . $informacion . "Reporte de Pruebas Rapidas: " . $reporte; */

$message = "Nombre: " . $nombre . "\nPuesto: " . $puesto . "\nEmpresa: " . $empresa . "\nCorreo: " . $correo . "\nTelefono: " . $numero . "\nCantidad de etiquetas: " . $etiquetas . "\nSeleccion de servicio: " . $tipo . "\nComentarios: " . $mensaje;
@mail($to, $subject, $message);

/* echo "<h4> ¡Correo enviado correctamente, puede cerrar Esta pagina cuando quiera! </h4>"; */

/* $para = 'campero9813@gmail.com';
$asunto = 'Nueva Cotizacion OrKelim'; */
/* 
@mail($para, $asunto, utf8_decode($message)) or die("Su mensaje no se envio.");;
echo "<h4> ¡Correo enviado correctamente</h4>"; */

header('Location: ../../index.html');
?>