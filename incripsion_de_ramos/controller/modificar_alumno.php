<?php
if (!empty($_POST["btnregister"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["rut"]) && !empty($_POST["edad"])) {
        $nombre = $_POST["Nombre"];
        $apellido = $_POST["apellido"];
        $rut = $_POST["rut"];
        $edad = $_POST["edad"];

        $sql = $conexion->query("UPDATE `alumnos` SET `Nombre`='$nombre',`apellido`='$apellido',`rut`='$rut',`edad`=$edad WHERE id_E=$id_E");

        if ($sql == 1) {
            header("location:registro_alumno.php");
        } else {
            echo "<div class='alert alert-danger'>Error al actualizar alumno</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Hay campos vacíos</div>";
    }
}
?>

