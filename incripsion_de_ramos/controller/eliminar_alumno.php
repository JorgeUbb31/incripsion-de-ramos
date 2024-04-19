<?php

if (!empty($_POST["id_E"])) {
    $id_E=$_GET["id_E"];
    $sql=$conexion->query(  "DELETE FROM `alumnos` WHERE id_E=$id_E");
    if ($sql==1) {
        echo "<div class='alert alert-warning'> alumno eliminado </div>";
    } else {
        echo "<div class='alert alert-danger'> alumno eliminado </div>";
    }
    
}
?>