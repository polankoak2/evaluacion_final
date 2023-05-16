<?php
//Validamos que hayan llegado estas variables, y que no esten vacias:
if (isset($_POST["nombre"], $_POST["email"], $_POST["mensaje"]) and $_POST["nombre"] !="" and $_POST["email"]!="" and $_POST["mensaje"]!="" ){

//traspasamos a variables locales, para evitar complicaciones con las comillas:
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

//Preparamos la orden SQL
$consulta = "INSERT INTO mensajes
(id,nombre,email,mensaje) VALUES ('0','$nombre','$email','$mensaje')";

//Aqui ejecutaremos esa orden

} else {

echo '<p>Por favor, complete el <a href="formulario.html">formulario</a></p>';
}
?>