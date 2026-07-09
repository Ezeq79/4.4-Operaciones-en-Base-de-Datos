<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$basedatos = "hospital_db2";

$conexion = mysqli_connect($servidor, $usuario, $password, $basedatos);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>