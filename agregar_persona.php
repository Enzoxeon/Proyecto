<?php
include("conexion.php");

if ($_POST) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];

    $sql = "INSERT INTO personas (nombre, apellido, dni) 
            VALUES ('$nombre', '$apellido', '$dni')";
    $conexion->query($sql);

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Agregar Persona</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2>Agregar Persona</h2>
    
    <form method="POST">
        <div class="mb-3">
            <label>Nombre</label>
            <input class="form-control" name="nombre" required>
        </div>
        
        <div class="mb-3">
            <label>Apellido</label>
            <input class="form-control" name="apellido" required>
        </div>

        <div class="mb-3">
            <label>DNI</label>
            <input class="form-control" name="dni" required>
        </div>

        <button class="btn btn-success">Guardar</button>
        <a href="index.php" class="btn btn-secondary">Volver</a>
    </form>
</div>

</body>
</html>
