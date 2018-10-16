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

	echo '<div class="container" style="padding-top:3%; padding-bottom:5%">';

	echo '<h1 style=color:steelblue;text-align:center;padding-bottom:3%>Pokedex regional</h1>';

	if(!isset($_GET['whoisthatpokemon']) || empty($_GET['whoisthatpokemon'])){
		while ($rows=mysqli_fetch_assoc($result)) {

				echo '<div class="container" style="padding-left:20%; padding-right:20%; text-align: center">';
			
				echo '<table class="table table-bordered">';

				echo '<thead>
					    <tr>
					      <th scope="col">'.$rows['nombre'].'</th>
					      <th scope="col">'.'Tipo'.'</th>
					    </tr>
					  </thead>';

				echo '<tbody>
					    <tr >
					      <td><img src='.$rows['imagen'].'></th>
					      <td style="padding-top:5%"><img src='.$rows['tipo'].'></td>
					    </tr>
					    <tr>
					  </tbody>';

				echo '</table>';

				echo '</div>';
					
			}
		
	}else{
		$buscar = $_GET['whoisthatpokemon']; 
		$flag = false;

		while ($rows=mysqli_fetch_assoc($result)) {
			if($rows['nombre'] == $buscar) $flag = true;
		}

		if($flag){

			$result = $mysqli->query("SELECT * FROM pokemon WHERE nombre = '$buscar'");
			$rows=mysqli_fetch_assoc($result);
		
			echo '<div class="container" style="padding-left:20%; padding-right:20%; text-align: center">';
			
				echo '<table class="table table-bordered">';

				echo '<thead>
					    <tr>
					      <th scope="col">'.$rows['nombre'].'</th>
					      <th scope="col">'.'Tipo'.'</th>
					    </tr>
					  </thead>';

				echo '<tbody>
					    <tr >
					      <td><img src='.$rows['imagen'].'></th>
					      <td style="padding-top:5%"><img src='.$rows['tipo'].'></td>
					    </tr>
					    <tr>
					  </tbody>';

				echo '</table>';

				echo '</div>';
					
		}else {
			echo'<h2 style=color:tomato;text-align:center>No existe ese pokemon</h1>';
			echo'<h4 style=color:black;text-align:center>(Asegurate de que escribes la primer letra en mayuscula)</h1>';
		}
		
	}
	echo '</div>';
	?>

</body>
</html>

	
	

