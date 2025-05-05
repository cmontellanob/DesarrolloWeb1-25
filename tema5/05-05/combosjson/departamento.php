<?php include("conexion.php"); 
$sql="SELECT id,nombre  FROM departamentos";

$resultado=$con->query($sql);

$arreglo = [];
while($row=mysqli_fetch_array($resultado)){
    $arreglo[] = ["id" => $row['id'], "nombre" => $row['nombre']];
}
echo json_encode($arreglo); 


