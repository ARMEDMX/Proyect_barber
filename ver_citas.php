<?php
include "conexion.php";

if(isset($_SESSION['email'])) {
    
    $email = $_SESSION['email'];

    // Obtener el ID del usuario a partir del correo electrónico
    $query = "SELECT id_usuario FROM usuario WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $usuario_id = $row['id_usuario'];

    // Consultar las citas del usuario
    $query = "SELECT c.*, co.nombre as corte_nombre, co.precio FROM cita c INNER JOIN corte co ON c.corte_id = co.id_corte WHERE c.usuario_id = '$usuario_id' ORDER BY c.fecha ASC, c.hora ASC";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)) {
        $fecha = $row['fecha'];
        $hora = $row['hora'];
        $corte_nombre = $row['corte_nombre'];
        $precio = $row['precio'];
        $estatus = $row['estatus'];
        $id_cita = $row['id_cita'];
        echo "<tr>";
        echo "<td>" . $fecha . "</td>";
        echo "<td>" . $hora . "</td>";
        echo "<td>" . $corte_nombre . "</td>";
        echo "<td>" . $precio . "</td>";
        echo "<td>" . $estatus . "</td>";
        if($estatus == 'pendiente') {
            echo '<td><a href="pagar_cita.php?id_cita=' . $id_cita . '" type="button" class="btn btn-primary" data-toggle="modal" data-target="#paypalModal">Pagar</a> 
                  <a href="cancelar_cita.php?id_cita=' . $id_cita . '" class="btn btn-danger">Cancelar</a></td>';
                  
        } else {
            echo '<td></td>';
        }
        echo "</tr>";
    }
    echo $mensaje;
}
?>
