<?php
	$nombre = $_POST['nombre'];
	$apellido = $_POST ['apellido'];
	$correo = $_POST['correo'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];

	$para = 'griosrom@gmail.com';

	$header = 'From: ' . $correo;
	$msjCorreo = "Nombre: $nombre".' '."$apellido\n E-Mail: $correo\n Mensaje:\n $mensaje";

	if (isset($_POST['submit'])) {
		if (mail($para, $asunto, $msjCorreo, $header)) {
			// header("Location:../pages/contactos.html?message=Successful Submission! Thankyou for contacting us.");
			echo "<script language='javascript'>
			alert('Mensaje enviado, gracias por contactarnos.');
			window.location.href = 'http://www.ai.gitech.com.py';
			</script>";
		} else 
		{
		// header("Location:../contact.php?msg=Error To send Email !");
		}
	}
?>
