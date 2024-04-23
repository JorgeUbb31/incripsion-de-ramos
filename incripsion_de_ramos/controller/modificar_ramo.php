<?php
if (!empty($_POST["btnregister"])) {
    if (!empty($_POST["Nombre_R"]) && !empty($_POST["creditos"])) {
        echo "hola";
        $id_R=$_POST["id_R"];
        $Nombre_R=$_POST["Nombre_R"];
        $creditos=$_POST["creditos"];
        $sql = $conexion->query("UPDATE `ramos` SET `Nombre_R`='$Nombre_R', `creditos`=$creditos WHERE id_R=$id_R");
        if ($sql == 1) {
            header("location:registro_ramos.php");
        } else {
            echo "<div class='alert alert-danger'> error al modificar</div>";
        }
        
    }else {
        echo "<div class='alert alert-warning'> algun campo esta vacio</div>";
    }
}
?>
