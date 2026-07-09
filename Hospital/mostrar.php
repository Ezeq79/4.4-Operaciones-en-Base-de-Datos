<?php

include("conexion.php");

$sql = "SELECT * FROM pacientes";
$resultado = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pacientes Registrados</title>
</head>
<body>

<h2>Lista de Pacientes</h2>

<table border="1">

<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Edad</th>
    <th>Sexo</th>
    <th>Telefono</th>
    <th>Direccion</th>
    <th>Diagnostico</th>
    <th>Fecha Ingreso</th>
    <th>Editar</th>
    <th>Eliminar</th>
</tr>

<?php

while($fila = mysqli_fetch_assoc($resultado))
{
    echo "<tr>";

    echo "<td>".$fila['id_pacient']."</td>";
    echo "<td>".$fila['Nombre']."</td>";
    echo "<td>".$fila['Apellido']."</td>";
    echo "<td>".$fila['Edad']."</td>";
    echo "<td>".$fila['Sexo']."</td>";
    echo "<td>".$fila['Telefono']."</td>";
    echo "<td>".$fila['Direccion']."</td>";
    echo "<td>".$fila['Diagnostico']."</td>";
    echo "<td>".$fila['FechaIngreso']."</td>";
    echo "<td><a href='editar.php?id=".$fila['id_pacient']."'>Editar</a></td>";
 
echo "<td><a href='eliminar.php?id=".$fila['id_pacient']."' onclick=\"return confirm('¿Seguro que deseas eliminar este paciente?');\">Eliminar</a></td>";
    
echo "</tr>";
}

?>

</table>

</body>
</html>