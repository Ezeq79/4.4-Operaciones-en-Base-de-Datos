<?php

include("conexion.php");

if (!isset($_GET['id'])) {
    die("ID no recibido");
}

$id = (int)$_GET['id'];

$sql = "DELETE FROM pacientes WHERE id_pacient = $id";

if (mysqli_query($conexion, $sql)) {
    header("Location: mostrar.php");
    exit();
} else {
    echo "Error al eliminar: " . mysqli_error($conexion);
}

?>