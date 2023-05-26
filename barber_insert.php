<?php
// Incluimos el archivo de conexión a la base de datos
include('conexion.php');

$mensaje = '';

// Incluimos el archivo de conexión a la base de datos
include('conexion.php');

// Preparamos la consulta SQL para obtener todos los barberos
$sql = "SELECT * FROM barbero";
$resultado = $conn->query($sql);

// Verificamos si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtenemos los valores del formulario
    $nombre = $_POST['nombre_barber'];
    $apellido = $_POST['apellido_barber'];

    // Preparamos la consulta SQL para insertar un nuevo barbero en la base de datos
    $sql = "INSERT INTO barbero (nombre_barber, apellido_barber) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $nombre, $apellido);

    // Ejecutamos la consulta y verificamos si se ha insertado correctamente el registro
    if ($stmt->execute()) {
        $mensaje = '<div class="alert alert-success">SE REGISTRO CORRECTAMENTE EL BARBERO</div>';
        header("Location: insertar_barber.php");
    } else {
        echo '<script>alert("Ha ocurrido un error al registrar el barbero");</script>';
    }

    // Cerramos la conexión y el statement
    $stmt->close();
    $conn->close();
}
?>