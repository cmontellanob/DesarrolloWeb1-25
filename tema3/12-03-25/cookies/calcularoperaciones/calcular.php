<?php
include("Operaciones.php");
$a = $_COOKIE['a'];
$b= $_COOKIE['b'];
$c= $_COOKIE['c'];
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
