<?php
if (!empty($_POST["btnregister"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["creditos"])) {
        
        $nombre = $_POST["nombre"];
        $creditos = $_POST["creditos"];
        
        $sql = $conexion->query("INSERT INTO ramos (Nombre_R, creditos) VALUES ('$nombre', $creditos)");
        if ($sql == 1) {
            echo '<div class="alert alert-success" role="alert">Ramo ingresado exitosamente</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Error al ingresar el ramo</div>';
        }
        
    } else {
        echo '<div class="alert alert-warning" role="alert">Algun campo está vacío</div>';
    }
}
?>
 