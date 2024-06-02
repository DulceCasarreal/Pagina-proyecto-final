<?php

	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$comentario = $_POST['comentario'];

	echo "<script text='txt/javascript'>
		alert('Su comentario ha sido registrado satisfactoriamente, gracias por su participación')
		window.location='contactos.html';
		</script>";

?>