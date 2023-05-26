<?php
include "conexion.php";

$calificacion = $_POST['estrellas'];
$tipo_reseña = $_POST['tipo_reseña'];
$mensaje = $_POST['mensaje'];


$sql = "INSERT INTO reseña (estrellas, tipo_reseña, mensaje)
        VALUES ('$calificacion', '$tipo_reseña', '$mensaje')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('La reseña se guardo exitosamente')</script>";
    header("Location: reseña.php");
    
    
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);


?>

