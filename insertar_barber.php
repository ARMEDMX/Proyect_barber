<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/gif" href="img/sisors.gif">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,0" />
  <title>Cliente</title>
</head>

<body>
    <!-- PANTALLA DE CARGA  -->

    <!-- Navbar -->
    <header class="header">

        <div class="logo">
            <img src="img/logo.png" alt="logo" class="logo_barber">
        </div>

        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="administrador.php">Inicio</a>
                        </li>
                        <li class="">
                            <h1 class="nav-link" href="login.php">
                                <?php echo $_SESSION['nombre']; ?>
                                <img src="img/Client.png">
                            </h1>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="logout.php?logout=true>">
                                <img src="img/logout.svg">
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>


    </header>

    <div class="form_barber">
        <div class="form_admin">
            <h2>Insertar Barbero</h2>
            <form action="barber_insert.php" method="POST">
                <label for="nombre_barber">Nombre:</label>
                <input type="text" name="nombre_barber" required><br><br>

                <label for="apellido_barber">Apellido:</label>
                <input type="text" name="apellido_barber" required><br><br>

                

                <div class="container">
                <input type="submit" value="Registrar">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#verBarberosModal">
                        Ver Barberos
                    </button>
                </div>

            </form>

        </div>

    </div>

   <!-- Modal -->
<div class="modal fade" id="verBarberosModal" tabindex="-1" role="dialog" aria-labelledby="verBarberosModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verBarberosModalLabel">Ver Barberos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php include 'consulta_barber.php'; ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Verificamos si hay resultados
                        if ($resultado->num_rows > 0) {
                            // Recorremos los resultados y los mostramos en la tabla
                            while ($barbero = $resultado->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $barbero['id_barbero'] . "</td>";
                                echo "<td>" . $barbero['nombre_barber'] . "</td>";
                                echo "<td>" . $barbero['apellido_barber'] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>No hay barberos registrados</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>