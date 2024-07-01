<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>equipos allride</title>
    <link rel="stylesheet" href="assets/stylo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fe38ad2a41.js" crossorigin="anonymous"></script>
</head>
<body>
  <script>
    function eliminar(){
      var respuesta=confirm("estas seguro que deseas eliminar?");
      return respuesta
    }
  </script>
    <h1 class="text-center p-3 bg-red">allride</h1>
    <?php 
     include "model/conexion.php";
    include "controller/eliminar_conductores.php";
    ?>
    <div class="container-fluid row">
    <form class=" col-3 P-3 " method="post">
        <h3 class="text-center text-secondary">registro contratos</h3>
        <?php 
        include "controller/registro_conductores.php";
        include "controller/buscar.php"
        ?>
  <div class="mb-3 border-5px bg-aqua">
    <label for="exampleInputEmail1" class="form-label">nombre de contrato</label>
    <input type="text" class="form-control" name="nombre_contrato">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">total licencias</label>
    <input type="num" class="form-control" name="total licencias">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">estado licencia</label>
    <input type="bit" class="form-control" name="estado licencia" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">fecha de inicio</label>
    <input type="date" class="form-control" name="fecha de inicio">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">fecha termino</label>
    <input type="date" class="form-control" name="fecha termino" >
  </div>
  <button type="submit" class="btn btn-primary" name="btnregistrar"value="ok">registrar</button>
</form> 
<div class="col-8 p-4">
<table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre_contrato</th>
      <th scope="col">total_licencias</th>
      <th scope="col">estado_licencia</th>
      <th scope="col">fecha_inicio</th>
      <th scope="col">fecha_termino</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include "model/conexion.php";
    include "controller/buscar.php";
    $sql=$conexion->query("select*from equipos");
    while($datos=$sql->fetch_object()){ ?>
 <tr>
      <td><?= $datos->id?></td>
      <td><?= $datos->$nombre_contrato?></td>
      <td><?= $datos->total_licencias?></td>
      <td><?= $datos->estado_licencia?></td>
      <td><?= $datos->fecha_inicio?></td>
      <td><?= $datos->fecha_termino?></td>
      <td>
        <a href="modificar_conductores.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
        <a onclick="return eliminar()"href="index.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
        <div class="text-right">
        </div>
      </td>
    </tr>
   <?php }
    ?>
  </tbody>
</table>
</div>  
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>