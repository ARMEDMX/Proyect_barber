<?php
session_start();

if (isset($_SESSION['email'])) {
  if ($_SESSION['rol'] == 'admin') {
    header("Location: administrador.php");
    exit();
  } elseif ($_SESSION['rol'] == 'barber') {
    header("Location: barber.php");
    exit();
  } elseif ($_SESSION['rol'] == 'usuario') {
    header("Location: client.php");
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@x.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" type="image/gif" href="img/sisors.gif">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,0" />
  <title>BarberBook</title>
</head>

<body>
  <!-- PANTALLA DE CARGA  -->
  <div id="contenedor_carga">
    <div id="carga"><img src="img/carga.gif" alt="" srcset=""></div>
  </div>
  
  <!-- Navbar -->
  <header class="header">

    <div class="logo">
      <img src="img/logo.png" alt="logo" class="logo_barber">
    </div>

    <!-- <nav class="navbar navbar-expand-sm justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Location</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Gallery</a>
                </li>

                <li class="nav-item">
                    <a href="login.html" class="nav-link">Login
                        <img src="img/Client.png">
                    </a>
                </li>
            </ul>
        </nav>   -->
    <nav class="navbar navbar-expand-sm navbar-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ubicacion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login
                <img src="img/Client.png">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


  </header>
  <!-- Content -->

  <section class="body-container">
    <div class="container-elements">

      <div class="container-clock">
        <div id="clock">
          <div id="hour"></div>
          <div id="minute"></div>
          <div id="second"></div>
        </div>
        
      </div>
      <div class="container-button">
        <button>Agendar</button>
      </div>

    </div>
  </section>


  <script src="carga.js"></script>
  <script src="script.js"></script>
</body>

</html>