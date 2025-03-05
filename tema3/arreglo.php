<?php
$dias=array("lunes","martes","miercoles","jueves","viernes","sabado","domingo");
echo "Los dias de la semana son: <br>";
foreach ($dias as $dia)
{
    echo $dia."<br>";
}

$meses=["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
echo "Los meses del año son: <br>";
foreach ($meses as $indice=>$mes)
{
    echo $mes."<br>";
}

//diferents tipos de datos en arreglos
$datos=[1,"hola",3.14,true];
echo "Los datos son: <br>";
foreach ($datos as $dato)
{
    echo $dato."<br>";
}

//arreglo asociativo
$persona=["nombre"=>"Juan","apellido"=>"Perez","edad"=>30];
echo $persona["nombre"]."<br>";
echo $persona["apellido"]."<br>";
echo $persona["edad"]."<br>";

echo "Los datos de la persona son: <br>";   
foreach ($persona as $clave=>$valor)
{
    echo $clave.": ".$valor."<br>";
}

?>