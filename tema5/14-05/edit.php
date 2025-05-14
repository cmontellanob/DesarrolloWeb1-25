<?php  session_start();
include("conexion.php");
require("verificarsesion.php");
require("verificarnivel.php");

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$sexo=$_POST['sexo'];
$correo=$_POST['correo'];
$id=$_POST['id'];
$profesion_id=$_POST['profesion_id'];

//$sql="UPDATE personas SET nombres='$nombres',apellidos='$apellidos',fecha_nacimiento='$fecha_nacimiento',sexo='$sexo',correo='$correo' WHERE id=$id";
$fotografia = "";

if ($_FILES['fotografia']["name"]!="")
{
    
    $datosfotografia=explode('.', $_FILES['fotografia']['name']);
    $fotografia=uniqid().'.'.$datosfotografia[1];
    copy($_FILES['fotografia']['tmp_name'],"images/".$fotografia);

    $stmt=$con->prepare('UPDATE personas SET fotografia=?, nombres=?,apellidos=?,fecha_nacimiento=?,sexo=?,correo=?,profesion_id=? WHERE id=?');


// Vincular parámetros
$stmt->bind_param("ssssssii",$fotografia, $nombres, $apellidos,$fecha_nacimiento,$sexo,$correo,$profesion_id, $id);
}else{
    $stmt=$con->prepare('UPDATE personas SET nombres=?,apellidos=?,fecha_nacimiento=?,sexo=?,correo=?,profesion_id=? WHERE id=?');


// Vincular parámetros
$stmt->bind_param("sssssii",$nombres, $apellidos,$fecha_nacimiento,$sexo,$correo,$profesion_id, $id);
}





// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Registro Actualizado";
} else {
    echo "Error: " . $stmt->error;
}

$con->close();
?>
