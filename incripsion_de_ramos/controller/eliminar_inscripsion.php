<?php
if (!empty($_GET["id_I"])) {
    $id_I = $_GET["id_I"];
    $sql = $conexion->query("DELETE FROM `incribir` WHERE id_I = $id_I");
    if ($sql == 1) {
        echo '<div class="alert alert-success">Eliminado correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar</div>';
    }
}

?>