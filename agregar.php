<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="recursos/css/bootstrap.css">
	<title>Pokedex</title>
</head>
<body>

	<?php

	include ('conexion.php');

	$nombre = $_POST['nombre'];
	$tipo = $_POST['tipo'];
	$imagen = $_POST['imagen_url'];

	$result = $mysqli->query("SELECT * FROM pokemon WHERE nombre = '$nombre'");

	if($result->num_rows == 0){
		$mysqli->query("INSERT INTO pokemon VALUES ('$nombre','$tipo','$imagen')");
		header('Location: pokedex.php');
	}else{
		echo'<div class="container" style="margin: auto; position: absolute; top: 0; left: 0; bottom: 0; right: 0;width: 50%; height: 50%;min-width: 200px;max-width: 400px;padding: 40px;">
			<h2 style=color:tomato;text-align:center>Ese pokemon ya existe en la Pokedex</h2>
			<form action="agregar.html">
			<button class="btn btn-primary btn-block"> Regresar </button>
			</form>
			</div>';
	}
	


	?>
</body>
</html>