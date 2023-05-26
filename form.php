<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/gif" href="img/sisors.gif">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,0" />
    <script src="https://kit.fontawesome.com/a622bd6bba.js" crossorigin="anonymous"></script>
    
    <title>Formulario</title>

</head>
<body>
    <div class="form-box row justify-content-center-center">
      <div class="container-form">
        <img class="avatar" src="img/logo.png" alt="Logo BarberBook">
        
        <a href="login.php">
        <img class="icono-volver" src="img/arrow-left-solid.svg" alt="Volver" >
        </a>
        
        <h1>Registro</h1>

        <form action="" method="post">
          
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="email">Correo Electronico:</label>
        <input type="email" id="email" name="email" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="pass">Contraseña:</label>
        <input type="password" id="pass" name="pass" class="form-control" required>
        <img src="img/eye-solid.svg" id="Eye" class="icon-eye">
    </div>

    <div class="form-group">
        <label for="rol">Rol:</label>
        <select name="rol_id" id="rol" class="form-control">
            <option value="1">Barber</option>
            <option value="2">Client</option>
        </select>
    </div>
           
    <input type="submit" class="btn btn-primary" value="Registrarse">

    <?php include "insertar.php"; ?>
           
    <?php if ($mensaje != ''): ?>
        <p class="alerta" style="color: <?php echo $color; ?>"><?php echo $mensaje; ?></p>
    <?php endif; ?> 
</form>
       

      </div>
    </div>
 <script src="form.js"></script>
</body>
</html>