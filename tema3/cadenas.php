<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de PHP</title>
</head>
<body>
<?php
$cadena=$_GET['cadena'];
echo strlen($cadena),"<br>";
$palabras=explode(" ",$cadena);
foreach ($palabras as $palabra )
{
    echo $palabra,"<br>";
}
    
$unido=implode(",",$palabras);
echo $unido,"<br>";
$resultado=sprintf("8x5 = %d <br>",8*5);
echo $resultado,"<br>";
echo substr("Devuelve una subcadena de otra",9,3),"<br><br>";
if (chop("Cadena \n\n ") == "Cadena")
    echo "Iguales<br><br>";
echo strpos("Busca la palabra dentro de la frase", "palabra"),"<br><br>";
echo str_replace("verde","rojo",$cadena),"<br>";    
?>

</body>
</html>

