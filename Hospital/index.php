<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro de Pacientes</title>

    <style>

        body{
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #eaf2f8;
        }

        .encabezado{
            background-color: #0d6efd;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 30px;
            font-weight: bold;
        }

        .contenedor{
            width: 500px;
            margin: 30px auto;
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
        }

        h2{
            text-align: center;
            color: #333;
        }

        label{
            font-size: 18px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"]{
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
            box-sizing: border-box;
        }

        .btn-guardar{
            width: 100%;
            padding: 12px;
            background-color: #198754;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .btn-guardar:hover{
            background-color: #146c43;
        }

        .btn-lista{
            display: block;
            text-align: center;
            margin-top: 15px;
            padding: 12px;
            background-color: #0d6efd;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
        }

        .btn-lista:hover{
            background-color: #0b5ed7;
        }

    </style>

</head>
<body>

<div class="encabezado">
    Sistema Hospitalario
</div>

<div class="contenedor">

    <h2>Registro de Pacientes</h2>

      <form action="guardar.php" method="POST">

        <label>Nombre:</label><br>
        <input type="text" name="nombre"><br><br>

        <label>Apellido:</label><br>
        <input type="text" name="apellido"><br><br>

        <label>Edad:</label><br>
        <input type="number" name="edad"><br><br>

        <label>Sexo:</label><br>
        <input type="text" name="sexo"><br><br>

        <label>Teléfono:</label><br>
        <input type="text" name="telefono"><br><br>

        <label>Dirección:</label><br>
        <input type="text" name="direccion"><br><br>

        <label>Diagnóstico:</label><br>
        <input type="text" name="diagnostico"><br><br>

        <label>Fecha de Ingreso:</label><br>
        <input type="date" name="fecha_ingreso"><br><br>

        <input type="submit" value="Guardar" class="btn-guardar">

    </form>

    <a href="mostrar.php" class="btn-lista">
        Ver Lista de Pacientes
    </a>

</div>

</body>
</html>
