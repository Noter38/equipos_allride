<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre_contrato"]) && !empty($_POST["total_licencias"]) && !empty($_POST["estado_liecncias"]) && !empty($_POST["fecha_inicio"]) && !empty($_POST["fecha_termino"])) {
        $id = $_POST["id"];
        $nombre_contrato = $_POST["nombre_contrato"];
        $total_licencias = $_POST["total_licencias"];
        $codigo_maquina = $_POST["codigo_maquina"];
        $fecha_de_trabajo = $_POST["fecha_de_trabajo"];
        $tipo_de_trabajo = $_POST["tipo_de_trabajo"];
        $coordinador = $_POST["coordinador"];

        // Consulta preparada
        $stmt = $conexion->prepare("UPDATE conductores SET conductor=?,rut=?,codigo_maquina=?,fecha_de_trabajo=?,tipo_de_trabajo=?,coordinador=? WHERE id=?");
        $stmt->bind_param("ssssssi",$conductor,$rut,$codigo_maquina,$fecha_de_trabajo,$tipo_de_trabajo,$coordinador,$id);

        if ($stmt->execute()) {
            // Éxito
            echo '
            <script>
                var confirmacion = confirm("¿Estás seguro de los campos?");

                if (confirmacion) {
                    window.location = "index.php";
                } else {
                    // El usuario ha cancelado, puedes realizar acciones adicionales aquí si es necesario
                    alert("Actualización cancelada");
                }
            </script>
            ';
        } else {
            // Error en la ejecución de la consulta
            echo '<div class="alert alert-warning">Error al actualizar: ' . $stmt->error . '</div>';
        }

        // Cierre de la consulta preparada
        $stmt->close();
    } else {
        // Campos vacíos
        echo '<div class="alert alert-danger">Campos vacíos</div>';
    }
}

