<?php
include "models/conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnregister"])) {
    
    if(isset($_POST['estudiante']) && isset($_POST['ramo'])) {
        $id_estudiante = $_POST['estudiante'];
        $id_ramo = $_POST['ramo'];

        
        $sql_check = "SELECT COUNT(*) as count FROM incribir WHERE id_E = '$id_estudiante' AND id_R = '$id_ramo'";
        $result = $conexion->query($sql_check);
        $row = $result->fetch_assoc();
        $count = $row['count'];

        if ($count > 0) {
            echo "El estudiante ya inscribio el ramo";
        } else {
            
            $sql_insert = "INSERT INTO incribir (id_E, id_R) VALUES ('$id_estudiante', '$id_ramo')";
            if ($conexion->query($sql_insert) === TRUE) {
                echo "Inscripción realizada correctamente.";
            } else {
                echo "Error al realizar la inscripción: " . $conexion->error;
            }
        }
    } else {
        echo "Por favor, seleccione un estudiante y un ramo.";
    }
}

$sql_estudiantes = "SELECT id_E, Nombre FROM alumnos";
$resultado_estudiantes = $conexion->query($sql_estudiantes);

$sql_ramos = "SELECT id_R, Nombre_R FROM ramos";
$resultado_ramos = $conexion->query($sql_ramos);
?>