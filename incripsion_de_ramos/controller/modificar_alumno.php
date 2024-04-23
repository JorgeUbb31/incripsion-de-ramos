<?php

if (!empty($_POST["btnregitrar"])) {
    if (!empty($_POST["Nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["edad"])) {
        $id = $_POST["id"];
        $Nombre = $_POST["Nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
        $sql = $conexion->query("UPDATE `alumnos` SET `Nombre`='$Nombre', `apellido`='$apellido', `edad`='$edad' WHERE id_E=$id");
        if ($sql == 1) {
            header("location:registro_alumno.php");
        } else {
            echo '<div class="alert alert-danger">Error al actualizar los datos</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Por favor completa todos los campos</div>';
    }
}


?>