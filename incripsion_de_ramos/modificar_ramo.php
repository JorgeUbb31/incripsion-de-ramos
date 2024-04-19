<?php

include "models\conexion.php";
$id_R=$_GET["id_R"];

$sql=$conexion->query("select * from ramos where id_R=$id_R")

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
            <h3 class="text-center text-secondary" >modificaion de ramos</h3>
        </div>
        <?php
        while($datos=$sql->fetch_object()){?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">id_R</label>
                <input type="text" class="form-control" name="id_R" disabled value="<?= $datos->id_R?>" maxlength="10">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nombre del ramo</label>
                <input type="text" class="form-control" name="Nombre_R" value="<?= $datos->Nombre_R?>"  maxlength="10">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">creditos</label>
                <input type="number" class="form-control" name="creditos" value="<?= $datos->edad?>">
            </div>
        <?php }
        ?>
                <button type="submit" class="btn btn-primary" name="btnregister" value="ok">modificar alumno</button>
            </form>
</body>
</html>