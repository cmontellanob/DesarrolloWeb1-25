<?php session_start();
include("conexion.php");
require("verificarsesion.php");
require("verificarnivel.php");


$nombre=$_POST['nombre'];

//$sql="INSERT INTO personas(nombres,apellidos,fecha_nacimiento,sexo,correo) VALUES('$nombres','$apellidos','$fecha_nacimiento','$sexo','$correo')";


$stmt=$con->prepare('INSERT INTO profesiones(nombre) VALUES(?)');

// Vincular parámetros
$stmt->bind_param("s",$nombre);



// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Nuevo registro creado con éxito";
} else {
    echo "Error: " . $stmt->error;
}

$con->close();
?>
<meta http-equiv="refresh" content="3;url=readprofesiones.php">
