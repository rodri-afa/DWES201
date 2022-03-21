<?php

$conexion = 'mysql:host=127.0.0.1;port=3306;dbname=201_DWES-1_PDO';
$username = 'root';
$password = '';

$BD = new PDO($conexion, $username, $password);
echo "conexion realizada";
echo "<br>";

$consulta = "SELECT * FROM peliculas WHERE director='Tarantino'";


$peliculas = $BD->query($consulta);
