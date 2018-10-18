<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="recursos/css/bootstrap.css">
	<style>
		body{
			background: url("recursos/imagenes/fondo.jpg") no-repeat;
			background-size: cover;
		}
	</style>
	<title>Pokedex</title>
</head>
<body >



<div class="container" style="margin: auto; position: absolute; top: 0; left: 0; bottom: 0; right: 0;width: 50%; height: 50%;min-width: 200px;max-width: 400px;padding: 40px;" >

 	<h1 style=color:white>Pokedex regional</h1>

 	<form action="pokedex.php" method="GET">
 		<button class="btn btn-primary form-control "> Buscar Pokemon </button>
 		<input class="form-control" type="text" name="whoisthatpokemon" placeholder="Abra..." style="text-align:center"></input>
	</form>
	<form action="agregar.html" style=padding-top:3%>
 		<button class="btn btn-primary btn-block"> Agregar Pokemon </button>
	</form>

</div>



</body>
</html>
