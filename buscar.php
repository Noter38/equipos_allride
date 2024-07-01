<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/stylo.css">
    <title>Formulario de Búsqueda</title>
</head>
<body>
    <?php

    include "model/conexion.php";
    include "controller/buscar.php";
    ?>

    <h1>Formulario de Búsqueda</h1>
    <form action="buscar.php" method="GET">
        <label for="search">Buscar:</label>
        <input type="text" id="search" name="query" required>
        <button type="submit" class="btn btn-primary" name="btnbuscar"value="ok">buscar</button>
    </form>
</body>
</html>

