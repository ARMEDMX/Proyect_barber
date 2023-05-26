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
                            <a class="nav-link" href="ubicacion.php">Ubicación</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Reseña">Reseñas / Contacto</a>
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


<div id="Reseña" class="container-cita">  
    <div class="form_reseña">
        <div class="logo-container">
                <img src="img/comment.svg">
                <h1>Reseña</h1>
            </div>
            <form method="POST" action="guardar_reseña.php">
                <label for="estrellas">Calificación:</label>
                <select name="estrellas" id="estrellas" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">1 </option>
                    <option value="2">2 </option>
                    <option value="3">3 </option>
                    <option value="4">4 </option>
                    <option value="5">5 </option>
                </select>
                <br>
                <label for="tipo_reseña">Tipo de reseña:</label>
                <select name="tipo_reseña" id="tipo_reseña" required>
                    <option value="">Seleccione una opción</option>
                    <option value="pagina_web">Página web</option>
                    <option value="barbero">Barbero</option>
                </select>
                <br>
                <label for="mensaje">Mensaje:</label>
                <textarea name="mensaje" id="mensaje" required></textarea>
                <br>

                <br>
                <input type="submit" value="Guardar">
            </form>

            
           

    </div>

    <div class="form_reseña">
    <?php include 'comentarios.php'; ?>
    <h1>Reseñas</h1>

<?php
// Mostrar las reseñas en una tabla
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Calificación</th><th>Tipo de reseña</th><th>Mensaje</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id_reseña"] . "</td>";
        echo "<td>" . $row["estrellas"] . "</td>";
        echo "<td>" . $row["tipo_reseña"] . "</td>";
        echo "<td>" . $row["mensaje"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay reseñas para mostrar.";
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
    </div>

</div>

    

</body>


<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4>HORARIOS</h4>
        <p>ESTAMOS DE LUNES A SÁBADO</p>
        <p>DE 12 DE LA TARDE A 6 DE LA TARDE</p>
        <p>RECUERDA, YA PUEDES AGENDAR UNA CITA :)</p>
        <p>181</p>
      </div>
      <div class="col-md-6">
        <h4>CONTACTO</h4>
        <p>
          <a href="mailto:barber123@hotmail.com">barber123@hotmail.com</a>
        </p>
        <p>
          <a href="tel:+528781358539">(52) 8781358539</a>
        </p>
      </div>
    </div>
  </div>
</footer>