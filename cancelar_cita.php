<?php
include "conexion.php";

$mensaje = '';

if(isset($_GET['id_cita'])) {
    
    $id_cita = $_GET['id_cita'];

    // Eliminar la cita de la base de datos
    $query = "DELETE FROM cita WHERE id_cita = '$id_cita'";
    $result = mysqli_query($conn, $query);

    if ($result) {
       
        echo "<script>alert('CITA CANCELADA EXITOSAMENTE');</script>";
        header('Location: client.php');
        
    } else {
        $mensaje = '<div class="alert alert-danger">Error al cancelar la cita</div>';
    }
} else {
    echo "Error: no se especificó la cita a cancelar";
}
mysqli_close($conn);
?>