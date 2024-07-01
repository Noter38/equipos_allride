<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["conductor"]) && !empty($_POST["rut"]) && !empty($_POST["codigo_maquina"]) && !empty($_POST["fecha_de_trabajo"]) && !empty($_POST["tipo_de_trabajo"])  && !empty($_POST["coordinador"]) ) {
      
        $conductor=$_POST["conductor"];
        $rut=$_POST["rut"];
        $codigo_maquina=$_POST["codigo_maquina"];
        $fecha_de_trabajo=$_POST["fecha_de_trabajo"];
        $tipo_de_trabajo=$_POST["tipo_de_trabajo"];
        $coordinador=$_POST["coordinador"];

        $resultado=$conexion->query("INSERT INTO conductores(conductor,rut,codigo_maquina,fecha_de_trabajo,tipo_de_trabajo,coordinador)
        values('$conductor','$rut','$codigo_maquina','$fecha_de_trabajo','$tipo_de_trabajo','$coordinador')");
        if ($resultado) {
            echo '
    <script>
    alert ("agregado exitosamente")

    window.location = "index.php";
    </script>
    ';

        }else{
            echo '<div class="alert alert-danger">error al registrar'.$conexion->error;
        }
        
    }else{
        echo '<div class="alert alert-warning">alguno de los campos esta vacio</div>';
    }
    
}


