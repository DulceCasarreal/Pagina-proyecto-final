<?php

	$nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$pago = $_POST['pago'];
	
	echo "<script text= 'txt/javascript'>
		alert('Su compra ha sido registrada satisfatoriamente, una vez realizado el pagoen un maximo de 5 dias recibirá su producto');
		window.location='productos.html';
		</script>";

?>