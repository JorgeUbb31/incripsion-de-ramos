<?php

if (!empty($_POST["btnregister"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["edad"]) && !empty($_POST["rut"])) {
        
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
        $rut = $_POST["rut"];
        

        $validar = $conexion->prepare("SELECT * FROM alumnos WHERE rut = ?");
        $validar->bind_param("s", $rut);
        $validar->execute();
        $result = $validar->get_result();

        if ($result->num_rows > 0) {
            echo '<div class="alert alert-warning">El alumno ya está registrado</div>';
        } else {
            
            $sql = $conexion->prepare("INSERT INTO alumnos (nombre, apellido, rut, edad) VALUES (?, ?, ?, ?)");
            $sql->bind_param("sssi", $nombre, $apellido, $rut, $edad);

            if ($sql->execute()) {
                echo '<div class="alert alert-success">Usuario registrado exitosamente</div>';
            } else {

                if ($conexion->errno == 1062) { 
                    echo '<div class="alert alert-warning p-4">El alumno ya está registrado</div>';
                } else {
                    echo '<div class="alert alert-danger">Error al intentar registrar al usuario</div>';
                }
            }
        }
    }
}
?>