<?php
if (!empty($_GET["id_E"])) {
    $id_E = $_GET["id_E"];
    $sql = $conexion->query("DELETE FROM `alumnos` WHERE id_E = $id_E");
    if ($sql == 1) {
        echo '<div class="alert alert-success">Eliminado correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar</div>';
    }
}

?>