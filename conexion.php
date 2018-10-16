<?php

	$mysqli = new mysqli("localhost:3307", "root", "", "pokedex");

	$result = $mysqli->query("SELECT * FROM pokemon");

?>