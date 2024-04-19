<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regsitro de Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/55867e6547.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="view/style.css">
</head>
<body>
    <h1>
        <div class="registroA">registro de estudiantes</div>
        <div class="container-fluid row">
            <form class="col-4 p-3" method="post">
                <div class="registro">
                <h3 class="text-center text-secondary" >registro de estudiantes</h3>
                </div>
                <?php
                include "models/conexion.php";
                include "controller/registrar_alumno.php";
                ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">nombre</label>
                    <input type="text" class="form-control" name="nombre" maxlength="10">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">apellido</label>
                    <input type="text" class="form-control" name="apellido">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">edad</label>
                    <input type="number" class="form-control" name="edad">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">rut</label>
                    <input type="text" class="form-control" name="rut">
                </div>
                <button type="submit" class="btn btn-primary" name="btnregister" value="ok">Registrar</button>
            </form>
            <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                    <th scope="col">id estudiante</th>
                    <th scope="col">nombre</th>
                    <th scope="col">apellido</th>
                    <th scope="col">edad</th>
                    <th scope="col">rut</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                    <tbody>
                            <?php
                            include "models\conexion.php";
                            $sql=$conexion->query("select * from alumnos");
                            while($datos=$sql->fetch_object()){ ?>
                                <tr>
                                    <td class="p-3 small"><?= $datos->id_E?></td>
                                    <td class="p-3 small"><?= $datos->Nombre?></td>
                                    <td class="p-3 small"><?= $datos->apellido?></td>
                                    <td class="p-3 small"><?= $datos->edad?></td>
                                    <td class="p-3 small"><?= $datos->rut?></td>
                                    <td>


                                        <a href="modificaar_alumno.php?id_E=<?= $datos->id_E?>" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <a onclick="return eliminar()" href="registro_alumno.php" class="btn btn-small btn-danger"><i class="fa-solid fa-user-slash"></i></a>
                                    </td>
                                </tr>
                            <?php }
                            ?>
                    </tbody>
            </table>
        </div>

        
    </h1>
    
</body>
</html>