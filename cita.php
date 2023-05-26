<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Cita</title>
</head>
<body>
    <div class="form_box">
        <form action="insertar_cita.php" method="POST">
            <label for="fecha">Fecha:</label>
            <input type="datetime-local" id="fecha" name="fecha" required><br><br>
            

            <div class="form-group">
            <label for="corte">Tipo de corte:</label>
                <select name="corte" id="corte" class="form-control">
                    <option>Fade</option>
                    <option>Low-Fade</option>
                    <option>Taper</option>
                </select>
            </div>
            
            
            
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje"></textarea>
            
            
            <input type="submit" value="Guardar">

            
        </form>
    </div>
</body>
</html>