<?php
	include("conexion.php");
	$id=$_GET['id'];
	$sql="SELECT * FROM usuario WHERE id='$id'";
	$result = pg_query ($con, $sql) or die("Error en la consulta SQL");
	while($tabla=pg_fetch_array($result)){
		$nombre=$tabla['nombre'];
		$mail=$tabla['correo'];
		$dir=$tabla['direccion'];
		$id=$tabla['id'];
		$pass=$tabla['password'];
    }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Configuracion de registros</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="container">
	<div class="navbar navbar-default">
		<h3 class="navbar-brand">Eliminar<h3>	
	</div>
		<div class="row">
			<div class="col-xs-6 table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Correo</th>
							<th>Direccion</th>
						</tr>
					</thead>
					<tbody>
						<?php
						echo "<tr>
						<td>$nombre</td>
						<td>$mail</td>
						<td>$dir</td>
						</tr>";
						?>
					</tbody>
				</table>
			</div>
			<div class="col-xs-offset-3 col-xs-3">
				<div class="list-group">
					<li class="list-group-item"><a href="index.php">Menu</a></li>
					<li class="list-group-item"><a href="registros.php">Registros</a></li>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<form  role="form" method="post">
				<br><br>
					<label>Contraseña</label>
					<input type="text" id="contra" name="contra">
					<button class"btn btn-md btn-danger" name="aceptar" id="aceptar">Aceptar</button>
				</form>
			</div>			
		</div>


		<?php
			if(isset($_POST['aceptar'])){
				if($_POST['contra']==$pass){
					$query="DELETE FROM usuario WHERE id='$id';";
					echo "Registro eliminado";
				}
				else{
					echo "Contraseña incorrecta";
				}
			}
			$c=pg_query($query);			
		?>

				
</body>
</html>