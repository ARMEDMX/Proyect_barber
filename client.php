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
              <a class="nav-link" href="#Cita">Agendar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="galeria.php">Galeria</a>
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



    <div id="Cita" class="container-cita">

      <!-- Tabla de agenda -->
      <div class="form_box">

        <div class="logo-container">
          <img src="img/calendar.svg">
          <h1>Formulario de Agenda</h1>
        </div>
        <form action="" method="POST">

          <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" min="2023-04-24" required>
          </div>

          <div class="form-group">
            <label for="hora">Hora:</label>
            <input type="time" name="hora">
          </div>

          <div class="form-group">
            <label for="barbero">Barbero:</label>
            <select id="barbero" name="barbero" class="form-control" required>
              <option value="" disabled selected>Seleccione un barbero</option>
              <?php
              include "conexion.php";
              // Obtener los barberos de la base de datos y mostrarlos en el <select>
              $query = "SELECT id_barbero, nombre_barber, apellido_barber FROM barbero";
              $result = mysqli_query($conn, $query);
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<option value="' . $row['id_barbero'] . '">' . $row['nombre_barber'] . ' ' . $row['apellido_barber'] . '</option>';
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <label for="corte">Tipo de corte:</label>
            <select id="corte" name="corte" class="form-control" required>
              <option value="" disabled selected>Seleccione un corte</option>
              <?php
              include "conexion.php";
              // Obtener los cortes de la base de datos y mostrarlos en el <select>
              $query = "SELECT id_corte, nombre, precio FROM corte";
              $result = mysqli_query($conn, $query);
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<option value="' . $row['id_corte'] . '">' . $row['nombre'] . ' - $' . $row['precio'] . '</option>';
              }
              ?>
            </select>
          </div>

          <label for="mensaje">Mensaje:</label>
          <textarea id="mensaje" name="mensaje"></textarea>


          <input class="guardarCita" type="submit" value="Guardar">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ver-citas-modal">Ver
            citas</button>


        </form>
        <?php include "insertar_cita.php"; ?>


        <?php if ($mensaje != ''): ?>
          <p class="alerta" style="color: <?php echo $color; ?>"><?php echo $mensaje; ?></p>
        <?php endif; ?>

        <!-- BOTON VER CITAS -->


        <!-- VENTANA MODAL -->
        <div class="modal fade" id="ver-citas-modal" tabindex="-1" role="dialog" aria-labelledby="ver-citas-modal-label"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ver-citas-modal-label">Mis Citas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th class="text-center">Fecha</th>
                        <th class="text-center">Hora</th>
                        <th class="text-center">Corte</th>
                        <th class="text-center">Precio</th>
                        <th class="text-center">Estatus</th>
                        <th class="text-center">Acciones</th>
                      </tr>
                    </thead>
                    <tbody id="citas-body">
                      <?php include "ver_citas.php" ?>
                      <!-- Ventana modal -->
                      <div class="modal fade" id="paypalModal" tabindex="-1" role="dialog"
                        aria-labelledby="paypalModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="paypalModalLabel">Pagar con PayPal</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">

                              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_xclick">
                                <input type="hidden" name="business" value="LOTOTV45@hotmail.com">
                                <input type="hidden" name="lc" value="US">
                                <input type="hidden" name="item_name" value="Taper">
                                <input type="hidden" name="item_number" value="1">
                                <input type="hidden" name="amount" value="100.00">
                                <input type="hidden" name="currency_code" value="MXN">
                                <input type="hidden" name="button_subtype" value="services">
                                <input type="hidden" name="no_note" value="0">
                                <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif"
                                  border="0" name="submit"
                                  alt="PayPal, la forma más segura y rápida de pagar en línea.">
                                <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif"
                                  width="1" height="1">
                              </form>
                              
                              <p>No. Transferencia: 182047364950</p>

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>


      </div>



    </div>




    <!-- SCRIPTS JAVASCRIPTS -->
    <script src=""></script>
    <script src="hora.js"></script>
    <!-- <script src="carga.js"></script> -->
    <script src="script.js"></script>
</body>

</html>