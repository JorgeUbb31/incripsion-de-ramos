<?php
include "models/conexion.php";
$id_R=$_GET["id_R"];
$sql=$conexion->query("SELECT * FROM ramos WHERE id_R=$id_R");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificar ramos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <form class="col-4 p-3 m-auto" method="post">
        <div class="registro">
            <h3 class="text-center text-secondary" >modificación de ramos</h3>
        </div>
        <?php
        include "controller/modificar_ramo.php";
        while ($datos = $sql->fetch_object()) { ?>
            <input type="hidden" name="id_R" value="<?= $datos->id_R ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nombre del ramo</label>
                <input type="text" class="form-control" name="Nombre_R" value="<?= $datos->Nombre_R ?>" maxlength="10">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">créditos</label>
                <input type="number" class="form-control" name="creditos" value="<?= $datos->creditos ?> ">
            </div>
        <?php }
        ?>
    
        <button type="submit" class="btn btn-primary" name="btnregister" value="ok">modificar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>