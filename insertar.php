<?php
session_start();
include "conexion.php";

$mensaje = '';
$color = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $rol_id = $_POST["rol_id"];
    
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
    
    // Verificar si el email ya existe en la tabla
    $sql = "SELECT id_usuario FROM usuario WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $mensaje = '<div class="alert alert-warning">EL CORREO ELECTRÓNICO YA ESTÁ REGISTRADO</div>';
        $color = "red";
    } else {
        // Validar que el correo tenga un dominio permitido
        if (!preg_match("/@(hotmail|outlook|gmail)\.com$/", $email)) {
            $mensaje = '<div class="alert alert-danger">EL CORREO ELECTRÓNICO NO ES VÁLIDO</div>';
            $color = "red";
        } else {
            // Validar que la contraseña tenga al menos 8 caracteres
            if (strlen($pass) < 8) {
                $mensaje = '<div class="alert alert-danger">LA CONTRASEÑA DEBE TENER AL MENOS 8 CARACTERES</div>';
                $color = "red";
            } else {
                // Verificar que se ha seleccionado un rol válido
                $sql = "SELECT * FROM rol WHERE id_rol = '$rol_id'";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) != 1) {
                    $mensaje = '<div class="alert alert-danger">EL ROL SELECCIONADO NO ES VÁLIDO</div>';
                    $color = "red";
                } else {
                    // Insertar el registro en la tabla
                    $sql = "INSERT INTO usuario (nombre, apellido, email, pass, rol_id) VALUES ('$nombre', '$apellido', '$email', '$hashed_pass', '$rol_id')";
                    
                    if (mysqli_query($conn, $sql)) {
                        $mensaje = '<div class="alert alert-success">REGISTRO EXITOSO</div>';
                        $color = "green";
                    } else {
                        $mensaje = "Error al insertar el registro";
                        $color = "red";
                        echo mysqli_error($conn);
                    }
                }
            }
        }
    }
}

mysqli_close($conn);
?>