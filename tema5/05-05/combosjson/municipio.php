<?php include("conexion.php");

$id = $_GET["id"];
$sql="SELECT id,nombre  FROM municipio where provincia_id = $id";

$resultado=$con->query($sql);
$arreglo = [];
while($row=mysqli_fetch_array($resultado)){
    $arreglo[] = ["id" => $row['id'], "nombre" => $row['nombre']];
}
echo json_encode($arreglo); 
