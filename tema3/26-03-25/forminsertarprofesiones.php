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
    <form action="createprofesiones.php"method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <input type="submit" value="Guardar">

    </form>
    
</body>
</html>