<?php

	$servidor = "localhost";
	$usuario = "root";
	$clave = "";
	$bd = "plataforma";

	$conectado = new mysqli($servidor, $usuario, $clave, $bd);
	mysqli_set_charset($conectado, 'utf8');
	if($conectado -> connect_errno)
	{ 
		echo "<script text= 'txt/javascript'>
		alert('ERROR!, la conexion no se pudo establecer');
		window.location='acceso.html';
		</script>";
	}
?>