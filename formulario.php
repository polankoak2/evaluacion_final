
<?php
	$server="localhost";
	$user="admin";
	$pwd="admin";
	$DB="toyochile";

	$enlace = mysqli_connect($server, $user, $pwd, $DB);	

	if(!$enlace){

		echo 'error en la conexión';
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Refresh" content="TIEMPO;url=URL">
		<meta http-equiv='cache-control' content='no-cache'>
		<meta http-equiv='expires' content='0'>
		<meta http-equiv='pragma' content='no-cache'>
		<IMG SRC="logo.png" ALIGN=RIGHT width="200" heiht="200">
		<h1>Formulario de Registro de Clientes</h1>
		<p>Ingrese los datos solicitados:</p>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<form class="formulario" id="formulario" name="formulario" method="POST">
					<p>Nombre: <input type="text" name="nombre" placeholder="Nombre"></p>
					<p>Apellido: <input type="text" name="apellido" placeholder="Apellido"></p>
					<p>Rut: <input type="text" name="rut" placeholder="Rut (sin guión)"></p>
					<p>Dirección: <input type="text" name="direccion" placeholder="Direccion"></p>
					<p>Teléfono: <input type="text" name="telefono" placeholder="Telefono"></p>
					<br>
					<br>
					<br>
					<input type="submit" class="btn" name="registrarse" value="Registrate">
					<input type="button" onclick="location.href='consulta.php';" value="Ver los clientes registrados" />
			</form>		
	</body>
</html>
<?php

	if (isset($_POST['registrarse'])){
		$nombre = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
		$rut = trim($_POST['rut']);
		$direccion = trim($_POST['direccion']);
		$telefono = trim($_POST['telefono']);

		$insertaDatos = "INSERT INTO cliente(nombre, apellido, rut, direccion, telefono) VALUES ('$nombre','$apellido','$rut','$direccion','$telefono')";

		$ejecutaInserta = mysqli_query($enlace,$insertaDatos);

	if($ejecutaInserta){

			echo 'Datos ingresados correctamente';
		}
	}
?>
