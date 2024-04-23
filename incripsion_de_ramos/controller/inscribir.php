<?php

if (!empty($_POST["btnregister"])) {
    if (!empty($_POST["id_E"]) && !empty($_POST["Nombre"]) && !empty($_POST["id_R"]) && !empty($_POST["Nombre_R"])) {
        // Obtener los datos del formulario
        $id_E = $_POST["id_E"];
        $Nombre = $_POST["Nombre"];
        $id_R = $_POST["id_R"];
        $Nombre_R = $_POST["Nombre_R"];

        // Insertar los datos en la tabla 'inscribir'
        $sql = "INSERT INTO inscribir (id_E, Nombre, id_R, Nombre_R) VALUES ('$id_E', '$Nombre', '$id_R', '$Nombre_R')";
        
        // Ejecutar la consulta SQL
        if ($conexion->query($sql) === TRUE) {
            echo "Los datos se guardaron correctamente.";
        } else {
            echo "Error al guardar los datos: " . $conexion->error;
        }
    } else {
        echo "Por favor completa todos los campos.";
    }
}

?>