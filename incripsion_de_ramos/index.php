<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="view/style.css">
</head>
<body class="black-bg">
    <h1 class="blue-text">inscripción de ramos</h1>
    <div class="row">
        <div class="col-md-6">
            <a href="registro_alumno.php"class="btn btn-primary me-md-2" type="button" name="alumno">Alumnos</a>
        </div>
        <div class="col-md-6 d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="registro_ramos.php" class="btn btn-primary" type="button" name="ramo">ramos</a>
        </div>
    </div>
    <select class="form-select form-select-sm mb-3" aria-label="small select example">
        <option selected>ESTUDIANTE</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>

    <select class="form-select form-select-sm mb-3" aria-label="Small select example">
        <option selected>RAMOS</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
