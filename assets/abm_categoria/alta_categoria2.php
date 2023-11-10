<?php
include "../../conexion.php";

$nombre = $_REQUEST['Nombre_categoria'];
$descripcion = $_REQUEST['Descripcion'];

$nombre = mysqli_real_escape_string($conexion, $nombre);
$descripcion = mysqli_real_escape_string($conexion, $descripcion);

$sql = "INSERT INTO categoria (Nombre, Descripcion) VALUES ('$nombre', '$descripcion')";
if (mysqli_query($conexion, $sql)) {
    echo "<h2>El Nombre es: " . $nombre . "</h2>";
    echo "<h2>El Apellido es: " . $descripcion . "</h2>";
} else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?> 