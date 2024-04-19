<?php

if (!empty($_POST["btnregister"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["creditos"])) {
        
        $nombre= $_POST["nombre"];
        $creditos = $_POST["creditos"];
        
        $sql=$conexion->query(" INSERT INTO ramos(Nombre_R, creditos) VALUES('$nombre', $creditos)");
        if ($sql==1) {
            echo '<div class="alert alert-succes">ramo ingresado exitosamente</div>';
        } else {
            echo '<div class="alert alert-danger text-transform-capitalize">error al ingresar el ramo</div>';
        }
        
    }else {
        echo '<div class="alert alert-warning">algun campo esta vacio</div>';
    }
}    
?>  