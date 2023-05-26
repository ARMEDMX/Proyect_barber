<?php
// Conexión a la base de datos
include 'conexion.php';

// Consulta para obtener las reseñas
// Verificar si se ha establecido la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Consulta para obtener las reseñas de la base de datos
$sql = "SELECT * FROM reseña";
$result = mysqli_query($conn, $sql);

?>