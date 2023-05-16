<?php
	$server="localhost";
	$user="admin";
	$pwd="admin";
	$DB="toyochile";

	$enlace = mysqli_connect($server, $user, $pwd, $DB);

	$consulta = "SELECT * FROM cliente";
	$exe_consulta = mysqli_query($enlace, $consulta);
	$verFilas = mysqli_num_rows($exe_consulta);
	$fila = mysqli_fetch_array($exe_consulta);

		if(!$exe_consulta){

			echo "Error en la consulta";
		} else{

			if($verFilas<1){

				echo "<tr><td>Sin Registros</td></tr>";
			} else{

				echo "
						<table border = 1 cellspacing = 1 cellpadding = 1>
								<tr>
									<th>Marca</th>
									<th>Modelo</th>
									<th>Color</th>
									<th>Matrícula</th>
									<th>Precio de Venta</th>
								</tr>";
				while($row = mysqli_fetch_array($exe_consulta)){
				echo "
						<tr>
							<td>".$row[0]."</td>
							<td>".$row[1]."</td>
							<td>".$row[2]."</td>
							<td>".$row[3]."</td>
							<td>".$row[4]."</td>
						</tr>";

					}

				}
			}
?>
<br>
<br>
<br>
<a href="form_auto.php"><button type="button">VOLVER</button></a>