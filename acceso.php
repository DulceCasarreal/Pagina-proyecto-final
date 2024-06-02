<?php

	require('conectar.php');

	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];

	if(isset($_POST['ingresar']))
	{
		$consulta = mysqli_query($conectado, "SELECT * FROM acceso WHERE usuario = '$usuario' and clave = '$clave'");
		$numregristros = mysqli_num_rows($consulta);
		if($numregristros !=0)
		{
			echo "<script text= 'txt/javascript'>
		alert('Inicio de sesion exitoso. Bienvenido, ".$usuario."');
		window.location='adminsistema.html';
		</script>";
		}
		else
		{
			echo "<script text= 'txt/javascript'>
		alert('ERROR!, nombre de usuario o contraseña incorrecta');
		window.location='acceso.html';
		</script>";
		}	
	}
	mysqli_close($conectado);
?>