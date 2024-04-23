<?php

if (!empty($_POST["btnregister"])) {
    $sqlEstudiantes = $conexion->query("SELECT id_E, Nombre FROM alumnos");
    $sqlRamos = $conexion->query("SELECT id_R, Nombre_R FROM ramos");

    while ($estudiante = $sqlEstudiantes->fetch_assoc()) {
        while ($ramo = $sqlRamos->fetch_assoc()) {
            $id_E = $_POST['id_E'];
            $Nombre_E = $_POST['Nombre'];
            $id_R = $_POST['id_R'];
            $Nombre_R = $_POST['Nombre_R'];
        
            $sqlInsert = $conexion->query("INSERT INTO incribir (id_E, Nombre_E, id_R, Nombre_R) VALUES ($id_E, '$Nombre_E', $id_R, '$Nombre_R')");
        
        if (!$sqlInsert) {
            echo "Error inscribir ramos: " . $conexion->error;
        }
    }
}

    echo "inscripcion de ramos correcta";

}
?>
