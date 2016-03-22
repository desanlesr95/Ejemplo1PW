<?php
	$user="postgres";
	$pass="";
	$host = "127.0.0.1"; 
	$dbname = "datos";
	$con=pg_connect("host=$host user= $user dbname=$dbname");
	if(!$con){
		echo "<br>";
		echo "Error en la conexion";
	}
?>