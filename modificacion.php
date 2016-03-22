<?php
	include "conexion.php";
	$nombre=$_POST['nombre'];
	$mail=$_POST['mail'];
	$pass=$_POST['pass'];
	$dir=$_POST['dir'];
	$id=(isset($_POST['id']) and !empty($_POST['id']))?$_POST['id'] : 0;
	if($id==0){
		$query="INSERT INTO usuario (nombre,password,correo,direccion) VALUES('$nombre','$mail','$pass','$dir');";
	}
	else{
		$query="UPDATE usuario set nombre='$nombre',password='$pass',correo='$mail',direccion='$dir' WHERE id='$id';";
	}
	$c=pg_query($query);
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="navbar navbar-default">	
		</div>
			<p>"<?php 
				if($c){
					echo "Registro modificado";
				}
				else{
					echo "No se pudo modificar el registro";
				}
    			?>"
    		</p>
	<div class="row"><a href="registros.php">Regresar a registros</a></div>
	</div>
</body>
</html>