<?php
include("Operaciones.php");
$a = $_POST['a'];
$b= $_POST['b'];
$c= $_POST['c'];
$op= $_POST['op'];
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
