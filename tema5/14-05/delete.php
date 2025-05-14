<?php session_start();
include("conexion.php");
require("verificarsesion.php");
require("verificarnivel.php");

$id=$_GET['id'];
//$sql="DELETE FROM personas WHERE id=$id";

$stmt=$con->prepare('DELETE FROM personas WHERE id=?');
$stmt->bind_param("i",$id);
// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Registro Eliminado";
} else {
    echo "Error: " . $stmt->error;
}

$con->close();
?>
