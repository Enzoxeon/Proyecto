<?php
include("conexion.php");

if ($_POST) {
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Nota = $_POST['Nota'];
    $Materias = $_POST['Materia'];

    $sql = "INSERT INTO alumnos (Nombre, Apellido, Nota, Materia) 
            VALUES ('$Nombre', '$Apellido', '$Nota', '$Materias')";
    $conexion->query($sql);

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Agregar Alumno</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2>Agregar Alumno</h2>
    
    <form method="POST">
        
        <div class="mb-3">
            <label>Nombre</label>
            <input class="form-control" name="Nombre" required>
        </div>
        
        <div class="mb-3">
            <label>Apellido</label>
            <input class="form-control" name="Apellido" required>
        </div>

        <div class="mb-3">
            <label>Materia</label>
            <input class="form-control" name="Materia" required>
        </div>

        <div class="mb-3">
            <label>Nota</label>
            <input class="form-control" type="number" step="0.01" name="Nota" required>
        </div>

        <button class="btn btn-success">Guardar</button>
        <a href="index.php" class="btn btn-secondary">Volver</a>
    </form>
</div>

</body>
</html>
