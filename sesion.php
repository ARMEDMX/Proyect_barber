<?php
include "conexion.php";

$mensaje = '';

if(isset($_POST['email']) && isset($_POST['pass'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if(empty($email)) {
        $mensaje = '<div class="alert alert-warning">POR FAVOR, INTRODUZCA SU CORREO ELECTRÓNICO.</div>';
    } elseif(empty($pass)) {
        $mensaje = '<div class="alert alert-warning">POR FAVOR, INTRODUZCA LA CONTRASEÑA.</div>';
    } elseif(strlen($pass) < 8) {
        $mensaje = '<div class="alert alert-warning">LA CONTRASEÑA DEBE TENER AL MENOS 8 CARACTERES.</div>';
    } else {
        $stmt = $conn->prepare("SELECT u.*, r.rol FROM usuario u INNER JOIN rol r ON u.rol_id = r.id_rol WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashed_pass = $row['pass'];
            if(password_verify($pass, $hashed_pass)) {
                session_start();
                $_SESSION['email'] = $row['email'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['rol'] = $row['rol'];
                if ($row['rol'] == 'admin') {
                    header("Location: administrador.php"); // Redirige a la página de administrador
                    exit();
                } else if ($row['rol'] == 'usuario') {
                    header("Location: client.php"); // Redirige a la página de usuario
                    exit();
                } else if ($row['rol'] == 'barber') {
                    header("Location: barber.php"); // Redirige a la página de barber
                    exit();
                } else {
                    header("Location: error.php"); // Redirige a una página de error
                    exit();
                }
            } else {
                $mensaje = '<div class="alert alert-danger">CONTRASEÑA INCORRECTA</div>';
            }
        } else {
            $mensaje = '<div class="alert alert-warning">CORREO NO REGISTRADO</div>';
        }

        $stmt->close();
        $conn->close();
    }
} elseif(isset($_POST['submit'])) {
    $mensaje = '<div class="alert alert-warning">POR FAVOR, INTRODUZCA SU CORREO ELECTRÓNICO Y CONTRASEÑA.</div>';
}
?>