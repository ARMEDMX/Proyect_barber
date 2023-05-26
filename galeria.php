<?php
session_start();
if (!isset($_SESSION['email']) || $_SESSION['rol'] != 'usuario') {
  header("Location: index.php");
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
    <!-- <div id="contenedor_carga">
    <div id="carga"><img src="img/carga.gif" alt="" srcset=""></div>
  </div> -->

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
                            <a class="nav-link" href="client.php">Agendar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#galeria">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ubicacion.php">Ubicación</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="reseña.php">Reseñas / Contacto</a>
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

    <div class="container-galeria">
        <div id="galeria" class="container-collage">
            <div class="logo-container">
                <img src="img/gallery.svg">
                <h1>Galeria</h1>
            </div>

            <div class="collage">
                <img src="img/img1.jpeg" alt="" class="collage-img">
                <img src="img/img2.jpeg" alt="" class="collage-img">
                <img src="img/img3.jpeg" alt="" class="collage-img">
                <img src="img/img4.jpeg" alt="" class="collage-img">
                <img src="img/img5.jpeg" alt="" class="collage-img">
                <img src="img/img6.jpeg" alt="" class="collage-img">
            </div>
        </div>
    </div>


</body>