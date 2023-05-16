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