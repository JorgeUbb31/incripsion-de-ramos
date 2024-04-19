<?php

include "models\conexion.php";
$id_E=$_GET["id_E"];

$sql=$conexion->query("select * from alumnos where id_E=$id_E")

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificar alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <form class="col-4 p-3 m-auto" method="post">
        <div class="registro">
            <h3 class="text-center text-secondary" >modificaion de estudiante</h3>
        </div>
        <?php
        include "controller/modificar_alumno.php";
        while($datos=$sql->fetch_object()){?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->Nombre?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">apellido</label>
                <input type="text" class="form-control" name="apellido"value="<?= $datos->apellido?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">edad</label>
                <input type="number" class="form-control" name="edad" value="<?= $datos->edad?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">rut</label>
                <input type="text" class="form-control" name="rut" disabled value="<?= $datos->rut?>">
            </div>
        <?php }
        ?>
                <button type="submit" class="btn btn-primary" name="btnregister" value="ok">modificar alumno</button>
            </form>
</body>
</html>