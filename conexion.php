
<?php
 
    $servername =  "localhost:3306"; // nombre del servidor
    $username   =  "root"; // nombre de usuario de la base de datos
    $password   =  "alumnotec19"; // contraseña de la base de datos
    $dbname     =  "barber"; // nombre de la base de datos

    //Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // if ($conn->connect_error) {
    //     die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
    //   }
    //   echo "La conexión a la base de datos ha sido exitosa";
    if ($conn->connect_error) {
      die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
  }
    

?>

