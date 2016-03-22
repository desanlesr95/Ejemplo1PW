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
	<div class="col-xs-4 form-group">
		<form  action="modificacion.php" role="form" method="post">
			<h3>
				<label class="label label-primary control-label">Nombre</label>
			    <input type="text" id="nombre" name="nombre" value="<?php echo $nombre;?>" class="form-control"></br>
				<label class="label label-primary control-label">Pass</label>
				<input type="text" id="pass" name="pass" value="<?php echo $pass;?>" class="form-control"></br>
				<label class="label label-primary control-label">Correo</label>
				<input type="mail" id="mail" name="mail" value="<?php echo $mail;?>"class="form-control"><br>
				<label class="label label-primary control-label">Direccion</label>
				<input type="text" id="dir" name="dir" value="<?php echo $dir;?>" class="form-control"><br>
				<input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
				<button class="btn btn-md btn-danger" id="mod" name="mod">Cambiar</button>				
			</h3>
		</form>
	</div>
</body>
</html>