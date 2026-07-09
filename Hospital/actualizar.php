<?php

include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$diagnostico = $_POST['diagnostico'];
$fecha_ingreso = $_POST['fecha_ingreso'];

$sql = "UPDATE pacientes SET
        Nombre = '$nombre',
        Apellido = '$apellido',
        Edad = '$edad',
        Sexo = '$sexo',
        Telefono = '$telefono',
        Direccion = '$direccion',
        Diagnostico = '$diagnostico',
        FechaIngreso = '$fecha_ingreso'
        WHERE id_pacient = $id";

$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    header("Location: mostrar.php");
    exit();
} else {
    echo "Error al actualizar: " . mysqli_error($conexion);
}

?>