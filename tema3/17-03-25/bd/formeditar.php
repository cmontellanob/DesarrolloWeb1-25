<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("conexion.php"); 
    $id=$_GET['id'];
    $sql="SELECT id,nombres,apellidos,fecha_nacimiento,sexo,correo FROM personas WHERE id=$id";
    $resultado=$con->query($sql);
    $row = $resultado->fetch_assoc();
    ?>
    <form action="edit.php"method="post">
        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres" value="<?php echo $row['nombres'];?>">
        <br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" value="<?php echo $row['apellidos'];?>">
        <br>
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" value="<?php echo $row['fecha_nacimiento'];?>">
        <br>
        <label for="sexo">Sexo:</label>
        <input type="radio" name="sexo" value="Masculino" 
        <?php echo $row['sexo'] == 'Masculino' ? 'checked' : '';   ?> >Masculino
        <input type="radio" name="sexo" value="Femenino" 
        <?php echo $row['sexo'] == 'Femenino' ? 'checked' : '';   ?>>Femenino
        <br>
        <label for="correo">Correo:</label>
        <input type="email" name="correo" value="<?php echo $row['correo'];?>">
        <br>
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        <input type="submit" value="Guardar">

    </form>
    
</body>
</html>