<?php
    include "conexion.php";
    if(isset($_POST['boton'])){
		$nombre=$_POST['nombre'];
		$mail=$_POST['mail'];
		$pass=$_POST['pass'];
		$dir=$_POST['dir'];
		$para      =  $mail;
    $titulo    = 'Codigo de Verifiacion';
    $mensaje   = 'Para Activar tu cuenta en Nenek-SAAC\nInserta el siguiente codi';
    $cabeceras = 'From: Le_sr_95-08-16@hotmail.com'.phpversion();
    mail($para, $titulo, $mensaje, $cabeceras);
    ///////////
    header("/confirmacion.html");
		//$query="INSERT INTO usuario (nombre,password,correo,direccion) VALUES('$nombre','$pass','$mail','$dir');";
		/*$c=pg_query($query);
		if($c){
?>
			<script LANGUAJE="JavaScript">
				alert("registrado");
			</script>
		<?php
		}
		else{
		?>
			<script LANGUAJE="JavaScript">
				alert("no egistrado");
			</script>
			<?php
		}
	}*/
?>


<html class="divblue">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Primera Pagina</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body class="container">
		 <div><!--div contenedor-->
			<div class="row-fluid"> <!--1-->
				<div class="navbar navbar-default">
					<ul>
						<a href="registros.php" class="navbar-brand">Ver registros</a>
						<h1 class="textcenter textnegro">Menu</h1>
					</ul>
			</div><!--1-->
			<div class="row-fluid"><!--2-->
				<div class="col-xs-3 col-xs-offset-1">
					<img src="img/a.jpeg " class="img-responsive img-rounded">
				</div>
				<div class="col-xs-6 form-group">
					<form  role="form" method="post">
						<h3>
 							<label class="label label-primary control-label">Nombre</label>
 						    <input type="text" id="nombre" name="nombre" placeholder="Introduce tu nombre" class="form-control"></br>

	 						<label class="label label-primary control-label">Contraseña</label>
 							<input type="password" id="pass" name="pass" placeholder="Introduce una contraseña" class="form-control"></br>
 							
 							<label class="label label-primary control-label">Correo</label>
 							<input type="mail" id="mail" name="mail" placeholder="Introduce un e-mail" class="form-control"><br>
 							
 							<label class="label label-primary control-label">Direccion</label>
 							<input type="text" id="dir" name="dir" placeholder="Introduce tu direccion" class="form-control"><br>
	 						<button class="btn btn-md btn-danger" id="boton" name="boton">Registrar</button>
	 					</h3>
					</form>
				</div>
			</div><!--2-->
			<div class="row-fluid">
				<div class="col-xs-12"><!--3-->
					<br><p class="textblue p textcenter" >Informacion</p>			
			    </div>
			</div>
			<div class="row">
				<div class="col-xs-5 table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>N°</th>
								<th>Nombre</th>
								<th>Kilometros</th>
								<th>Composicion de la atmosfera</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Mercurio</td>
								<td>12425331</td>
								<td>Trazas de hidrógeno y helio</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Venus</td>
								<td>14342312</td>
								<td>96 % CO2, 3 % nitrógeno,0.1 % agua</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Tierra</td>
								<td>4453532</td>
								<td>78 % nitrógeno, 21 % oxígeno, 1 % argón</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Marte</td>
								<td>2142412</td>
								<td>95 % CO2, 1.6 % argón, 3 % nitrógeno</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div><!--div contenedor-->
    </body>
</html>