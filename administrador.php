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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@x.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" type="image/gif" href="img/sisors.gif">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,0" />
  <title>Administrador</title>
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

    <nav class="navbar navbar-expand-sm navbar-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="insertar_barber.php">Insertar Barbero</a>
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
  <!-- Content -->

  <div class="body-container">
    <div class="container-elements">

      <h2 class="Bienvenida">Bienvenido a BarberBook
        <?php echo $_SESSION['rol']; ?>
      </h2>
      <div class="container-clock">
        <div id="clock">
          <div id="hour"></div>
          <div id="minute"></div>
          <div id="second"></div>
        </div>
      </div>

    </div>
  </div>


  <!-- SCRIPT PANTALLA DE CARGA -->
  <script src="carga.js"></script>
  <script src="script.js"></script>
</body>

</html>