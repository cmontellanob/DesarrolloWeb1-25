<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start();
    require("verificarsesion.php");
    require("verificarnivel.php");
    ?>
    <form action="create.php"method="post">
        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres">
        <br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos">
        <br>
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento">
        <br>
        <label for="sexo">Sexo:</label>
        <input type="radio" name="sexo" value="Masculino">Masculino
        <input type="radio" name="sexo" value="Femenino">Femenino
        <br>
        <label for="correo">Correo:</label>
        <input type="email" name="correo">
        <br>
        <input type="submit" value="Guardar">

    </form>
    
</body>
</html>