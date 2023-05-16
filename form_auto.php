
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
		<h1 align="center">Formulario de Registro de Inventario</h1>
		<h2>Ingrese el vehiculo a registrar:</h2>
		<link rel="stylesheet" type="text/css" href="estilo_auto.css">
	</head>
	<body>
		<form class="formulario" id="formulario" name="formulario" method="POST">
					<p>Marca: <input type="text" name="marca" placeholder="Marca"></p>
					<p>Modelo: <input type="text" name="modelo" placeholder="Modelo"></p>
					<p>Color: <input type="text" name="color" placeholder="Color"></p>
					<p>Matrícula: <input type="text" name="matricula" placeholder="Matrícula (si la tiene)"></p>
					<p>Precio de Venta: <input type="text" name="precio" placeholder="valor en pesos"></p>
					<br>
					<br>
					<br>
					<input type="submit" class="btn" name="agregar" value="Agregar Ítem">
					<input type="button" onclick="location.href='consulta_auto.php';" value="Ver los vehículos ingresados" />
			</form>		
	</body>
</html>
<?php

	if (isset($_POST['agregar'])){
		$marca = trim($_POST['marca']);
		$modelo = trim($_POST['modelo']);
		$color = trim($_POST['color']);
		$matricula = trim($_POST['matricula']);
		$precio = trim($_POST['precio']);

		$insertaDatos = "INSERT INTO auto(marca, modelo, color, matricula, precio) VALUES ('$marca','$modelo','$color','$matricula','$precio')";

		$ejecutaInserta = mysqli_query($enlace,$insertaDatos);

	if($ejecutaInserta){

			echo 'Datos ingresados correctamente';
		}
	}
?>