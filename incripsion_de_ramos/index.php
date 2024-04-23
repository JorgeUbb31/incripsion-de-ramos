<?php
include "models/conexion.php";

$sql_estudiantes = "SELECT id_E, Nombre FROM alumnos";
$resultado_estudiantes = $conexion->query($sql_estudiantes);

$sql_ramos = "SELECT id_R, Nombre_R FROM ramos";
$resultado_ramos = $conexion->query($sql_ramos);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/55867e6547.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="view/style.css">
</head>
<body class="black-bg">
    <h1 class="blue-text">Inscripción de ramos</h1>
    <div class="row">
        <div class="col-md-6">
            <a href="registro_alumno.php"class="btn btn-primary me-md-2" type="button" name="alumno">Alumnos</a>
        </div>
        <div class="col-md-6 d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="registro_ramos.php" class="btn btn-primary" type="button" name="ramo">Ramos</a>
        </div>
    </div>
    <?php
    include "controller/inscribir.php";
    ?>
    <select class="form-select form-select-sm mb-3" aria-label="small select example">
        <option selected>ESTUDIANTE</option>
        <?php
        while ($row = $resultado_estudiantes->fetch_assoc()) {
            echo "<option value='" . $row['id_E'] . "'>" . $row['Nombre'] . "</option>";
        }
        ?>
    </select>

    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
        <option selected>RAMOS</option>
        <?php
        while ($row = $resultado_ramos->fetch_assoc()) {
            echo "<option value='" . $row['id_R'] . "'>" . $row['Nombre_R'] . "</option>";
        }
        ?>
    </select>
    <button type="submit" class="btn btn-primary" name="btnregister" value="ok">Inscribir ramos</button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id estudiante</th>
                <th scope="col">nombre estudiante</th>
                <th scope="col">id ramo</th>
                <th scope="col">nombre ramo</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql=$conexion->query("select * from incribir");
            while($datos=$sql->fetch_object()){ ?>
            <tr>
                <td class="p-3 small"><?= $datos->id_E?></td>
                <td class="p-3 small"><?= $datos->Nombre_E?></td>
                <td class="p-3 small"><?= $datos->id_R?></td>
                <td class="p-3 small"><?= $datos->Nombre_R?></td>>
                <td>
                    <a href="modificar_alumno.php?id_E=<?= $datos->id_E?>" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                    <a onclick="return eliminar()" href="registro_alumno.php?id_E=<?= $datos->id_E ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-user-slash"></i></a>

                </td>
            </tr>
            <?php }
            ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

