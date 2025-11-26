<?php
include("conexion.php");

// Consultas
$sql_alumnos = "SELECT * FROM alumnos";
$result_alumnos = $conexion->query($sql_alumnos);

$sql_personas = "SELECT * FROM personas";
$result_personas = $conexion->query($sql_personas);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Escuela</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    
    <h1 class="text-center mb-4">Gestión Escolar</h1>

    <!-- ================== ALUMNOS ================== -->
    <div class="card mb-4 shadow">
        <div class="card-header bg-primary text-white">
            Alumnos
        </div>
        <div class="card-body">
            <a href="agregar_alumno.php" class="btn btn-success mb-3">+ Agregar Alumno</a>
            <table class="table table-bordered table-striped">
                <tr class="table-primary">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nota</th>
                    <th>Materia</th>
                    <th>Acciones</th>
                </tr>
                <?php while($row = $result_alumnos->fetch_assoc()){ ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['Nombre']; ?></td>
                    <td><?= $row['Apellido']; ?></td>
                    <td><?= $row['Nota']; ?></td>
                    <td><?= $row['Materia']; ?></td>
                    <td>
                        <a href="eliminar_alumno.php?id=<?= $row['id']; ?>" 
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('¿Eliminar alumno?');">
                            Eliminar
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>

    <!-- ================== PERSONAS ================== -->
    <div class="card shadow">
        <div class="card-header bg-secondary text-white">
            Personas
        </div>
        <div class="card-body">
            <a href="agregar_persona.php" class="btn btn-success mb-3">+ Agregar Persona</a>
            <table class="table table-bordered table-striped">
                <tr class="table-secondary">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DNI</th>
                </tr>
                <?php while($row = $result_personas->fetch_assoc()){ ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['nombre']; ?></td>
                    <td><?= $row['apellido']; ?></td>
                    <td><?= $row['dni']; ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>

</div>

</body>
</html>
