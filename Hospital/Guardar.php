<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

include("conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$diagnostico = $_POST['diagnostico'];
$fecha_ingreso = $_POST['fecha_ingreso'];

$sql = "INSERT INTO pacientes
(Nombre, Apellido, Edad, Sexo, Telefono, Direccion, Diagnostico, FechaIngreso)
VALUES
('$nombre','$apellido','$edad','$sexo','$telefono','$direccion','$diagnostico','$fecha_ingreso')";

if(mysqli_query($conexion, $sql)){
    echo "Paciente guardado correctamente";
}else{
    echo "Error: " . mysqli_error($conexion);
}

mysqli_close($conexion);

?>
``