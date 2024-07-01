<?php
if (!empty($_GET["id"])) {
    $id = $_GET["id"];

    // Consulta preparada
    $stmt = $conexion->prepare("DELETE FROM equipos WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Éxito
        echo '<div class="alert alert-success">Eliminado correctamente</div>';
    } else {
        // Error en la ejecución de la consulta
        echo '<div class="alert alert-warning">Error al eliminar: ' . $stmt->error . '</div>';
    }

    // Cierre de la consulta preparada
    $stmt->close();

    // Redireccionamiento después de imprimir mensajes
    header("location:index.php");
}

