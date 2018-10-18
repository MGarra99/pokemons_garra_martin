<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="recursos/css/bootstrap.css">
	<style>
		body{
			background: url("recursos/imagenes/fondo.jpg");
			    background-size: 1290px 720px;
		}
	</style>
	<title>Pokedex</title>
</head>
<body>

	<?php

	include ('conexion.php');

	echo '<div class="container" style="padding-top:3%; padding-bottom:5%">';

	echo '<h1 style=color:white;text-align:center;padding-bottom:3%>Pokedex regional</h1>';

	if(!isset($_GET['whoisthatpokemon']) || empty($_GET['whoisthatpokemon'])){
		while ($rows=mysqli_fetch_assoc($result)) {

				echo '<div class="container" style="padding-left:20%; padding-right:20%; text-align: center">';
			
				echo '<table class="table table-bordered table-dark">';

				echo '<thead>
					    <tr>
					      <th scope="col">'.$rows['nombre'].'</th>
					      <th scope="col">'.'Tipo'.'</th>
					    </tr>
					  </thead>';

				echo '<tbody>
					    <tr >
					      <td><img src='.$rows['imagen'].'></td>
					      <td style="padding-top:11%">'.$rows['tipo'].'</td>
					    </tr>
					  </tbody>';
				
				echo
				'<form action="modificar.php" method="GET">
				<button class="btn btn-primary btn-block" name="clave" value="'.$rows['nombre'].'"> Modificar Pokemon </button>
				</form>
				<form action="eliminar.php" method="GET">
				<button class="btn btn-primary btn-block" action="agregar.html" name="clave" value="'.$rows['nombre'].'"> Eliminar Pokemon </button>
				</form>';

				echo '<br>';

				echo '</table>';

				echo '</div>';

				echo '<br><br>';
					
			}
		
	}else{
		$buscar = $_GET['whoisthatpokemon']; 
		$flag = false;

		while ($rows=mysqli_fetch_assoc($result)) {
			if(strtolower($rows['nombre']) == strtolower($buscar)) $flag = true;
		}

		if($flag){

			$result = $mysqli->query("SELECT * FROM pokemon WHERE nombre = '$buscar'");
			$rows=mysqli_fetch_assoc($result);
		
			echo '<div class="container" style="padding-left:20%; padding-right:20%; text-align: center">';
			
				echo '<table class="table table-bordered table-dark">';

				echo '<thead>
					    <tr>
					      <th scope="col">'.$rows['nombre'].'</th>
					      <th scope="col">'.'Tipo'.'</th>
					    </tr>
					  </thead>';

				echo '<tbody>
					    <tr >
					      <td><img src='.$rows['imagen'].'></td>
					      <td style="padding-top:11%">'.$rows['tipo'].'</td>
					    </tr>
					    <tr>
					  </tbody>';

				echo
				'<form action="modificar.php" method="GET">
				<button class="btn btn-primary btn-block" name="clave" value="'.$rows['nombre'].'"> Modificar Pokemon </button>
				</form>
				<form action="eliminar.php" method="GET">
				<button class="btn btn-primary btn-block" action="agregar.html" name="clave" value="'.$rows['nombre'].'"> Eliminar Pokemon </button>
				</form>';

				echo '</table>';

				echo '</div>';
					
		}else {
			echo'<h2 style=color:dark;text-align:center>No existe ese pokemon</h1>';
			echo '<br>';
			$result = $mysqli->query("SELECT * FROM pokemon");
			while ($rows=mysqli_fetch_assoc($result)) {

				echo '<div class="container" style="padding-left:20%; padding-right:20%; text-align: center">';
				
				echo '<table class="table table-bordered table-dark">';

				echo '<thead>
					    <tr>
					      <th scope="col">'.$rows['nombre'].'</th>
					      <th scope="col">'.'Tipo'.'</th>
					    </tr>
					  </thead>';

				echo '<tbody>
					    <tr >
					      <td><img src='.$rows['imagen'].'></td>
					      <td style="padding-top:11%">'.$rows['tipo'].'</td>
					    </tr>
					  </tbody>';
				
				echo
				'<form action="modificar.php" method="GET">
				<button class="btn btn-primary btn-block" name="clave" value="'.$rows['nombre'].'"> Modificar Pokemon </button>
				</form>
				<form action="eliminar.php" method="GET">
				<button class="btn btn-primary btn-block" action="agregar.html" name="clave" value="'.$rows['nombre'].'"> Eliminar Pokemon </button>
				</form>';

				echo '<br>';

				echo '</table>';

				echo '</div>';

				echo '<br><br>';
					
			}

		}
		
	}
	echo '</div>';
	?>

</body>
</html>

	
	

