<?php 
include("Operaciones.php");
session_start();
$a = $_SESSION['a'];
$b= $_SESSION['b'];
$c= $_SESSION['c'];
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
