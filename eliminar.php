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

	$clave = $_GET['clave'];

	$mysqli->query("DELETE FROM pokemon WHERE nombre = '$clave'");

	header('Location: pokedex.php');

	?>
</body>
</html>