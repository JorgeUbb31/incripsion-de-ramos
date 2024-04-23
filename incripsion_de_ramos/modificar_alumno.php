<?php
include "models/conexion.php";
$id=$_GET["id_E"];
$sql=$conexion->query("SELECT * FROM alumnos WHERE id_E=$id");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificacion de alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <form class="col-4 p-3 m-auto" method="post">
        <div class="registro">
            <h3 class="text-center text-secondary" > Modificar estudiante</h3>
        </div>
        <input type="hidden" name="id" value="<?= $_GET["id_E"]?>">
        <?php
        include "controller\modificar_alumno.php";
        while ($datos=$sql->fetch_object()) { ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nombre</label>
                <input type="text" class="form-control" name="Nombre" value="<?= $datos->Nombre?>" maxlength="10">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">apellido</label>
                <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido?>">
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
        <button type="submit" class="btn btn-primary" name="btnregitrar" value="ok">Modificar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>