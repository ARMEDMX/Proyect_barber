<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="icon" type="image/gif" href="img/sisors.gif">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,0" />
        
        <title>BarberBook</title>
    </head>
<body>
    <!-- PANTALLA DE CARGA  -->
    <div id="contenedor_carga">
        <div id="carga"><img src="img/carga.gif" alt="" srcset=""></div>
    </div>

    <!-- <div class="login-card-container">
        <div class="login-card">

            <div class="login-card-logo">
                <img src="img/logo.png" alt="">
            </div>

            <div class="login-card-header">
                <h1>Inicia Sesion</h1>
                <div>Por favor, inicia sesion para definir tu rol </div>
            </div>

            <form class="login-card-form">
                <div class="form-item">
                    <span class="material-symbols-outlined">mail</span>
                    <input type="text" placeholder="Ingresa tu correo" required autofocus>
                 </div>
                 
                 <div class="form-item">
                    <span class="material-symbols-outlined">lock</span>
                    <input type="password" placeholder="Ingresa tu Contraseña" required>
                 </div>

                 <div class="form-item-other">
                    <div class="checkbox">
                        <input type="checkbox" id="rememberMeCheckbox">
                        <label for="rememberMeCheckbox">Recuerdame</label>
                        <a href="">Olvide mi contraseña</a>
                    </div>
                 </div>

                 <button type="submit">Iniciar Sesión</button>

            </form>
            
            <div class="login-card-footer">
                No estas registrado? <a href="">Crea una cuenta gratuita</a>
            </div>

        </div>
    </div> -->


    <div class="login-box">
        <img class="avatar" src="img/logo.png" alt="Logo BarberBook">
        
        <a href="index.php">
        <img class="icono-volver" src="img/arrow-left-solid.svg" alt="Volver" >
        </a>
        
        <h1 class="">Login Here</h1>
        
        <form action="" method="post">
            <!-- USERNAME -->
            <label for="email">Correo:</label>
            <input type="email" id="email" name="email" placeholder="Ingresar Correo" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" >

            <!-- PASSWORD -->
            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" placeholder="Ingresar Contraseña">

            <input type="submit" value="Ingresar">

            <a href="form.php">No tienes cuenta?</a>
            
            <?php include "sesion.php"; ?>

            <?php if ($mensaje != ''): ?>
              <p class="alerta" style="color: <?php echo $color; ?>"><?php echo $mensaje; ?></p>
            <?php endif; ?>
        </form>
    </div>
    
    <!-- SCRIPT PANTALLA DE CARGA -->
    <script src="carga.js"></script>
</body>
</html>