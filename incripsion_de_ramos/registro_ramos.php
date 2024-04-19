<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Ramos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/55867e6547.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="view/style.css">
</head>
<body>
    <script>    
        function eliminar() {
            var respuesta=confirm("¿seguro al eliminar el Ramo?");
            return respuesta
        }
    </script>
    <h1>
        <div class="registroA">registro de Ramos</div>
        <div class="container-fluid row">
            <form class="col-4 p-3" method="post">
                <div class="registro">
                <h3 class="text-center text-secondary" >ingreso de ramos</h3>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">nombre del ramo</label>
                    <input type="text" class="form-control" name="nombre" maxlength="10">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">creditos</label>
                    <input type="text" class="form-control" name="creditos">
                </div>
                <button type="submit" class="btn btn-primary" name="btnregister" value="ok">Registrar</button>
            </form>
            <div class="col-8 p-4">
            <table class="table">
                <div class="registro">
                <h3 class="text-center text-secondary" >ramos ingresados</h3>
                </div>
                <thead class="bg-info">
                    <tr>
                    <th scope="col">id ramo</th>
                    <th scope="col">nombre del ramo</th>
                    <th scope="col">creditos</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                    <tbody>
                                <tr>
                                  
                                    <td>
                                        <a href="modificar_alumno.php" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <a onclick="return eliminar()" href="registro_ramos.php" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                    </tbody>
            </table>
        </div>
        </div>
    </h1>
    
</body>
</html>