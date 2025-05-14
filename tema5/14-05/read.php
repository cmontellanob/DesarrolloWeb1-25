<?php session_start();

require("verificarsesion.php");

?>

<?php
include("conexion.php");
$orden = "personas.id";
$buscar = "";
if (isset($_GET["buscar"]))
{
    $buscar=$_GET["buscar"];
}
if  (isset($_GET['orden']))
{
    $orden = $_GET['orden'];
}
if (isset($_GET['asendente']))
{

    $asente= $_GET['asendente'];
} else
{
    $asente= "asc";
}
if (isset($_GET["pagina"]))
{
    $pagina=$_GET["pagina"];
} else
{
    $pagina=1;
}

$sql2="SELECT COUNT(*) as total FROM personas WHERE  nombres like '%$buscar%'";
$resultado2=$con->query($sql2);
$row2=mysqli_fetch_array($resultado2);
$total=$row2['total'];
$nropaginas = $total / 10;
$nropaginas = ceil($nropaginas);
$inicio = ($pagina-1) * 10;

$sql="SELECT fotografia,personas.id,nombres,apellidos,fecha_nacimiento,sexo,correo,profesiones.nombre as profesion FROM personas
      LEFT JOIN profesiones ON personas.profesion_id=profesiones.id 
      WHERE  nombres like '%$buscar%'  or apellidos like '%$buscar%' or correo like '%$buscar%' or profesiones.nombre like '%$buscar%'
      order by $orden $asente
      limit $inicio, 10  ";
$resultado=$con->query($sql);
$arreglo = [];
while($row=mysqli_fetch_array($resultado)){
    $arreglo[] = ["id" => $row['id'],
          "nombres" => $row['nombres'],
        "apellidos"=>$row["apellidos"],
        "fecha_nacimiento"=>$row["fecha_nacimiento"],
        "sexo"=>$row["sexo"],
        "correo"=>$row["correo"],
        "profesion"=>$row["profesion"],
    ];
}
$nuevoarreglo = [
    "datos" => $arreglo,
    "buscar" => $buscar,
    "pagina" => $pagina,
    "orden" =>$orden,
    "nropaginas" => $nropaginas
];
echo json_encode($nuevoarreglo);





?>

    
 





 