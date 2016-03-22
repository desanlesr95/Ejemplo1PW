<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registros</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="container d1">

	<div class="row-fluid">
		<div class="navbar navbar-default">
			<ul>
				<h5 class="navbar-brand">Registros</h5>
			</ul>
			<ul></ul>
		</div>
	</div>

	
	<div class="row-fluid">
		<div class="col-xs-5 table-responsive">	
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Direccion</th>
						<th>Modificar</th>
						<th>Eliminar</th>

				</thead>
				<tbody>


<?php
include("conexion.php");
$sql="SELECT id,nombre,correo,direccion FROM usuario";
$result = pg_query ($con, $sql) or die("Error en la consulta SQL");
while($tabla=pg_fetch_array($result)){
	$nombre=$tabla['nombre'];
	$correo=$tabla['correo'];
	$direccion=$tabla['direccion'];
	$id=$tabla['id'];
	echo "<tr>
	<td>$nombre</td>
	<td>$correo</td>
	<td>$direccion</td>
	<td><a href=\"modificar.php?id=".$id."\">Editar</a></td>
	<td><a href=\"eliminar.php?id=".$id."\">Eliminar</a></td>
	</tr>";
}
?>


				</tbody>
			</table>
		</div>
		
		<div class="col-xs-3">
				<div class="col-xs-4">
					<img src="img/i.png" class="img-responsive">
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="list-group">
					<li class="list-group-item"><a href="index.php">Menu</a></li>
			</div>	
		</div>
		


<?php 
pg_free_result($result);
pg_close($con); 
?>


</body>
</html>