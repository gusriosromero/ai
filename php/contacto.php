<?php
	$nombre = $_POST['nombre'];
	$apellido = $_POST ['apellido'];
	$correo = $_POST['correo'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];

	echo $nombre;
	$para = 'griosrom@gmail.com';

	$header = 'From: ' . $correo;
	$msjCorreo = "Nombre: $nombre.' '.$apellido\n E-Mail: correo\n Mensaje:\n $mensaje";
	  
	if ($_POST['submit']) {
		if (mail($para, $asunto, $msjCorreo, $header)) {
			echo "<script language='javascript'>
			alert('Mensaje enviado, muchas gracias.');
			window.location.href = 'http://www.agenciaintegral.com.py';
			</script>";
			} else {
			echo 'Falló el envio';
		}
	}
?>
