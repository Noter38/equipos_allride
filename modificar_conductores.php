<?php 
include "model/conexion.php";
$id=$_GET["id"];
$sql=$conexion->query("SELECT * FROM conductores WHERE id=$id");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/stylo.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<form class=" col-3 P-3 m-auto bg-rose" method="post">
        <h3 class="text-center text-secondary">Actualizar trabajo</h3>
        <input type="hidden" name="id" value="<?=$_GET["id"]?>">
        <?php 
        include "controller/modificar_conductores.php";
        while($datos=$sql->fetch_object()){?>
 <div class="mb-3 border-5px">
    <label for="exampleInputEmail1" class="form-label">conductor</label>
    <input type="text" class="form-control" name="conductor" value="<?= $datos->conductor?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">rut</label>
    <input type="text" class="form-control" name="rut"value="<?= $datos->rut?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">codigo_maquina</label>
    <input type="text" class="form-control" name="codigo_maquina"value="<?= $datos->codigo_maquina?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">fecha_de_trabajo</label>
    <input type="date" class="form-control" name="fecha_de_trabajo"value="<?= $datos->fecha_de_trabajo?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">tipo_de_trabajo</label>
    <input type="text" class="form-control" name="tipo_de_trabajo"value="<?= $datos->tipo_de_trabajo?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">coordinador</label>
    <input type="text" class="form-control" name="coordinador"value="<?= $datos->coordinador?>">
  </div>
        <?php }
        ?>
  <button type="submit" class="btn btn-primary" name="btnregistrar"value="ok">actualizar trabajo</button>
  <a href="index.php"class="btn btn-small btn-danger">regresar</a>
</form> 
</body>
</html>
