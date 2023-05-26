<?php
include "conexion.php";

if(isset($_SESSION['email'])) {
    
    $email = $_SESSION['email'];

    // Obtener el ID del usuario a partir del correo electrónico
    $query = "SELECT id_usuario FROM usuario WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $usuario_id = $row['id_usuario'];

    // Obtener el nombre y apellido del usuario en sesión
    $query = "SELECT nombre, apellido FROM usuario WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $nombre_usuario = $row['nombre'];
    $apellido_usuario = $row['apellido'];

    // Consultar las citas del barbero correspondiente
    $query = "SELECT c.*, co.nombre as corte_nombre, co.precio, b.nombre_barber, b.apellido_barber, u.nombre as nombre_usuario, u.apellido as apellido_usuario FROM cita c INNER JOIN corte co ON c.corte_id = co.id_corte INNER JOIN barbero b ON c.barbero_id = b.id_barbero INNER JOIN usuario u ON c.usuario_id = u.id_usuario WHERE b.nombre_barber = '$nombre_usuario' AND b.apellido_barber = '$apellido_usuario' ORDER BY c.fecha ASC, c.hora ASC";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $fecha = $row['fecha'];
            $hora = $row['hora'];
            $corte_nombre = $row['corte_nombre'];
            $precio = $row['precio'];
            $estatus = $row['estatus'];
            $nombre_usuario = $row['nombre_usuario'];
            $apellido_usuario = $row['apellido_usuario'];
            $id_cita = $row['id_cita'];
            echo "<tr>";
            echo "<td>" . $fecha . "</td>";
            echo "<td>" . $hora . "</td>";
            echo "<td>" . $corte_nombre . "</td>";
            echo "<td>" . $precio . "</td>";
            echo "<td>" . $estatus . "</td>";
            echo "<td>" . $nombre_usuario . " " . $apellido_usuario . "</td>";
            if($estatus == 'pendiente') {
                echo '<td><a href="cancelar_cita.php?id_cita=' . $id_cita . '" class="btn btn-danger">Eliminar</a></td>';

                      
            } else {
                echo '<td></td>';
            }
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>No hay citas disponibles</td></tr>";
    }
    
}
?>