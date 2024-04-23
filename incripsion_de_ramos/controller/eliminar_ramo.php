<?php
if (!empty($_GET["id_R"])) {
    $id_R = $_GET["id_R"];
    $sql = $conexion->query("DELETE FROM `ramos` WHERE id_R = $id_R");
    if ($sql == 1) {
        echo '<div class="alert alert-success">Eliminado correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar</div>';
    }
}

?>