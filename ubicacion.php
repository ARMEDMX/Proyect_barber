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
                            <a class="nav-link" href="galeria.php">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ubicacion">Ubicación</a>
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

    <div class="container-ubicacion">

        <div id="ubicacion" class="container-maps">
            
            <div class="logo-container">
                <img src="img/map.svg">
                <h1>Ubicación</h1>
            </div>

            <p>Local #87: BARBER SHOP <br>
                Calle. Ignacio Allende 585, Zona Centro, 26170 Nava, Coah. <br>
                CP. 26170.
            </p>

            <div class="content-ubicacion">
                <div class="maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7017.907949819627!2d-100.78015962229004!3d28.420645600000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86f5514e4f15b899%3A0xb3a1dc6a7febb37!2sOmega%20BarberShop!5e0!3m2!1ses-419!2smx!4v1683103394271!5m2!1ses-419!2smx"
                        width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="local">
                    <img src="img/localmg.png" alt="" srcset="">
                </div>
            </div>

        </div>

    </div>

</body>