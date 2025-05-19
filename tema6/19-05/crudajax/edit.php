<?php include("conexion.php");

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$sexo=$_POST['sexo'];
$correo=$_POST['correo'];
$id=$_POST['id'];

//$sql="UPDATE personas SET nombres='$nombres',apellidos='$apellidos',fecha_nacimiento='$fecha_nacimiento',sexo='$sexo',correo='$correo' WHERE id=$id";


$stmt=$con->prepare('UPDATE personas SET nombres=?,apellidos=?,fecha_nacimiento=?,sexo=?,correo=? WHERE id=?');


// Vincular parámetros
$stmt->bind_param("sssssi",$nombres, $apellidos,$fecha_nacimiento,$sexo,$correo, $id);



// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Registro Actualizado";
} else {
    echo "Error: " . $stmt->error;
}

$con->close();
?>
