<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include("conexion.php");

if (!isset($_GET['id'])) {
    die("No se recibió el ID");
}

$id = (int)$_GET['id'];

$sql = "SELECT * FROM pacientes WHERE id_pacient = $id";

$resultado = mysqli_query($conexion, $sql);

if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conexion));
}

$fila = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Paciente</title>
</head>
<body>

<h2>Editar Paciente</h2>

<form action="actualizar.php" method="POST">

    <input type="hidden" name="id"
           value="<?php echo $fila['id_pacient']; ?>">

    Nombre:<br>
    <input type="text" name="nombre"
           value="<?php echo $fila['Nombre']; ?>"><br><br>

    Apellido:<br>
    <input type="text" name="apellido"
           value="<?php echo $fila['Apellido']; ?>"><br><br>

    Edad:<br>
    <input type="number" name="edad"
           value="<?php echo $fila['Edad']; ?>"><br><br>

    Sexo:<br>
    <input type="text" name="sexo"
           value="<?php echo $fila['Sexo']; ?>"><br><br>

    Telefono:<br>
    <input type="text" name="telefono"
           value="<?php echo $fila['Telefono']; ?>"><br><br>

    Direccion:<br>
    <input type="text" name="direccion"
           value="<?php echo $fila['Direccion']; ?>"><br><br>

    Diagnostico:<br>
    <input type="text" name="diagnostico"
           value="<?php echo $fila['Diagnostico']; ?>"><br><br>

    Fecha de Ingreso:<br>
    <input type="date" name="fecha_ingreso"
           value="<?php echo $fila['FechaIngreso']; ?>"><br><br>

    <input type="submit" value="Actualizar">


</form>

</body>
</html>