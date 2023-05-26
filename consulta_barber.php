<?php
// Incluimos el archivo de conexión a la base de datos
include('conexion.php');

// Preparamos la consulta SQL para obtener todos los barberos
$sql = "SELECT * FROM barbero";
$resultado = $conn->query($sql);
?>