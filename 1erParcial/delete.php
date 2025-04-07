<?php session_start();
include("conexion.php");

$id=$_GET['id'];
$stmt=$con->prepare('DELETE FROM libros WHERE id=?');
$stmt->bind_param("i",$id);
// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Registro Eliminado";
} else {
    echo "Error: " . $stmt->error;
}

$con->close();
?>
<meta http-equiv="refresh" content="3;url=pregunta5.php">