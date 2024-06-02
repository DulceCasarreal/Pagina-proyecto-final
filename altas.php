<?php

	$clave = $_POST['clave'];
	$nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$pago = $_POST['pago'];
	$motivo = $_POST['motivo'];

	echo "<script text= 'txt/javascript'>
		alert('El alta solicitada por el administrador " .$clave. " ha sido registrada');
		window.location='adminsistema.html';
		</script>";

?>