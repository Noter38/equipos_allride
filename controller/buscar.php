<?php
if (!empty($_POST["btnbuscar"])) {
    if (!empty($_POST["allride"]) && !empty($_POST["id_contrato"])) {
        
        $all = $_POST["allride"];
        $id_contrato = $_POST["id_contrato"];
        
        // Preparar una declaración SQL para seleccionar datos
        $stmt = $conexion->prepare("SELECT * FROM allride WHERE id_contrato = ? AND nombre_contrato = ?");
        $stmt->bind_param("ss", $id_contrato,$nombre_contrato);
        
        // Ejecutar la declaración
        $stmt->execute();
        
        // Obtener el resultado
        $resultado = $stmt->get_result();
        
        // Verificar si se encontraron resultados
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "id_Contrato: " . htmlspecialchars($fila['id_contrato']) . "<br>";
                echo "id_contrato: " . htmlspecialchars($fila['id_contrato']) . "<br>";
                // Aquí puedes mostrar más campos según tu base de datos
            }
        } else {
            echo '<div class="alert alert-warning">No se encontraron resultados</div>';
        }
        
        // Cerrar la declaración
        $stmt->close();
        
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}

