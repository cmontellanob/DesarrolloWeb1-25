<?php  session_start();
include("conexion.php");
require("verificarsesion.php");
require("verificarnivel.php");

$nombre=$_POST['nombre'];
$id=$_POST['id'];

//$sql="UPDATE personas SET nombres='$nombres',apellidos='$apellidos',fecha_nacimiento='$fecha_nacimiento',sexo='$sexo',correo='$correo' WHERE id=$id";


$stmt=$con->prepare('UPDATE profesiones SET nombre=? WHERE id=?');


// Vincular parámetros
$stmt->bind_param("si",$nombre,  $id);



// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Registro Actualizado";
} else {
    echo "Error: " . $stmt->error;
}

$con->close();
?>
<meta http-equiv="refresh" content="3;url=readprofesiones.php">
