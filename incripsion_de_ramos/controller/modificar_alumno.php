<?php

if (!empty($_POST["btnregister"])) {
    if (!empty($_POST["nombre"]) & !empty($_POST["apellido"]) & !empty($_POST["rut"]) & !empty($_POST["edad"]) & !empty($_POST["id_E"])) {
        $id_E=$_POST["id_E"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $rut=$_POST["rut"];
        $edad=$_POST["edad"];
        $sql = $conexion->query("UPDATE `alumnos` SET `nombre`='$nombre', `apellido`='$apellido', `edad`='$edad', `rut`='$rut' WHERE id_E=$id_E");

        if ($sql==1) {
            header("location:registro_alumno.php");
        } else {
            echo "<div class='alert alert=danger'> campo vacios</div>";
        }
        
    }else {
        echo "<div class='alert alert=warning'> campo vacios</div>";
    }
}

?>