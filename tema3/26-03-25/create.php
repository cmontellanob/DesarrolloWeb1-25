<?php session_start();
include("conexion.php");
require("verificarsesion.php");
require("verificarnivel.php");


$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$sexo=$_POST['sexo'];
$correo=$_POST['correo'];
$profesion_id=$_POST['profesion_id'];

$fotografia = "";
if (isset($_FILES['fotografia']))
{
    $datosfotografia=explode('.', $_FILES['fotografia']['name']);
    $fotografia=uniqid().'.'.$datosfotografia[1];
    copy($_FILES['fotografia']['tmp_name'],"images/".$fotografia);

}



//$sql="INSERT INTO personas(nombres,apellidos,fecha_nacimiento,sexo,correo) VALUES('$nombres','$apellidos','$fecha_nacimiento','$sexo','$correo')";


$stmt=$con->prepare('INSERT INTO personas(fotografia,nombres,apellidos,fecha_nacimiento,sexo,correo,profesion_id) VALUES(?,?,?,?,?,?,?)');

// Vincular parámetros
$stmt->bind_param("ssssssi",$fotografia,$nombres, $apellidos,$fecha_nacimiento,$sexo,$correo, $profesion_id);



// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Nuevo registro creado con éxito";
} else {
    echo "Error: " . $stmt->error;
}

$con->close();
?>
<meta http-equiv="refresh" content="3;url=read.php">
