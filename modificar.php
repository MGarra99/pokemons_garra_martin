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
echo 
'<div class="container" style="margin: auto; position: absolute; top: 0; left: 0; bottom: 0; right: 0;width: 50%; height: 50%;min-width: 200px;max-width: 500px;padding: 40px;" >

 	<h2 style=color:steelblue;text-align:center>Modificar Pokemon</h2>

 	<form action="modificarValidar.php" method="POST">
 		
 		<label style="padding-top: 1%">Nombre</label>
 		<input class="form-control" type="text" name="nombre" placeholder="Abra" required></input>
 		<label style="padding-top: 1%">Tipo</label>
 		<select class="form-control" name="tipo">
 		  <option>Acero</option>
 		  <option>Agua</option>
 		  <option>Bicho</option>
 		  <option>Dragon</option>
 		  <option>Electrico</option>
 		  <option>Fantasma</option>
          <option>Fuego</option>
          <option>Hada</option>
          <option>Hielo</option>
          <option>Lucha</option>
          <option>Normal</option>
          <option>Planta</option>
          <option>Psiquico</option>
          <option>Roca</option>
          <option>Siniestro</option>
          <option>Tierra</option>
          <option>Veneno</option>
          <option>Volador</option>
    	</select>
 		<label style="padding-top: 1%">Imagen URL</label>
 		<input class="form-control" type="text" name="imagen_url" placeholder="https://vignette.wikia.nocookie.net/es.pokemon/images/5/56/Charmander.png" required></input>
 		<br>
 		<button class="btn btn-primary form-control" name="clave" value="'.$_GET['clave'].'"> Modificar </button>
	</form>

</div>';
?>
</body>
</html>