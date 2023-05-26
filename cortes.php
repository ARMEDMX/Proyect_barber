<?php
include "conexion.php";
// Obtener los cortes de la base de datos y mostrarlos en el <select>
$query = "SELECT id_corte, nombre, precio FROM corte";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    echo '<option value="' . $row['id_corte'] . '">' . $row['nombre'] . ' - $' . $row['precio'] . '</option>';
}
?>