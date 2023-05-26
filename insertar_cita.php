<?php

include "conexion.php";

$mensaje = '';

if(isset($_SESSION['email'])) {
    
    $email = $_SESSION['email'];

    // Obtener el ID del usuario a partir del correo electrónico
    $query = "SELECT id_usuario FROM usuario WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $usuario_id = $row['id_usuario'];

    // Obtener los datos de los barberos de la base de datos
    $query = "SELECT id_barbero, nombre_barber, apellido_barber FROM barbero";
    $result = mysqli_query($conn, $query);

    // Insertar los datos de la cita en la base de datos
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $corte_id = $_POST['corte'];
        $mensaje = $_POST['mensaje'];
        

        // Verificar si ya hay una cita registrada para esta fecha y hora
        $query = "SELECT COUNT(*) as count FROM cita WHERE fecha = '$fecha' AND hora = '$hora'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];
        
        if($count == 0) {
            // Insertar los datos de la cita en la base de datos
            $barbero_id = $_POST['barbero'];

            $query = "INSERT INTO cita (usuario_id, fecha, hora, corte_id, barbero_id, mensaje) VALUES ('$usuario_id', '$fecha', '$hora', '$corte_id', '$barbero_id', '$mensaje')";
            mysqli_query($conn, $query);

            $mensaje = '<div class="alert alert-success">SE REGISTRO EXITOSAMENTE LA CITA</div>';
        } else {
            // Mostrar un mensaje de error si ya existe un registro con la misma fecha y hora
            $mensaje = '<div class="alert alert-warning">Ya existe una cita programada para la fecha y hora seleccionadas.</div>';
        }
    }
}

?>
