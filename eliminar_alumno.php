<?php
include("conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM alumnos WHERE id = $id";
    $conexion->query($sql);
}

header("Location: index.php");
exit;