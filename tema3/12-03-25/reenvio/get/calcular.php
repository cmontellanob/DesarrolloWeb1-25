<?php
include("Operaciones.php");
$a = $_GET['a'];
$b= $_GET['b'];
$c= $_GET['c'];
$op= $_GET['op'];
$operaciones = new Operaciones($a, $b, $c);
switch ($op) {
    case "sumar":
        echo $operaciones->Sumar();
        break;
    case "restar":
        echo $operaciones->Restar();
        break;
    case "multiplicar":
        echo $operaciones->Multiplicar();
        break;
    case "dividir":
        echo $operaciones->Dividir();
        break;
}
?>
