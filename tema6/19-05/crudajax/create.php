<?php include("conexion.php");

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$sexo=$_POST['sexo'];
$correo=$_POST['correo'];

//$sql="INSERT INTO personas(nombres,apellidos,fecha_nacimiento,sexo,correo) VALUES('$nombres','$apellidos','$fecha_nacimiento','$sexo','$correo')";


$stmt=$con->prepare('INSERT INTO personas(nombres,apellidos,fecha_nacimiento,sexo,correo) VALUES(?,?,?,?,?)');

// Vincular parámetros
$stmt->bind_param("sssss",$nombres, $apellidos,$fecha_nacimiento,$sexo,$correo);



// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Nuevo registro creado con éxito";
} else {
    echo "Error: " . $stmt->error;
}

$con->close();
?>

