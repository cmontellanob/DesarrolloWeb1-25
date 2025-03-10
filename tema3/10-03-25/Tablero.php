<?php
$numerofilas = $_GET['numerofilas'];
$numerocolumnas = $_GET['numerocolumnas'];
$filabowser = $_GET['fila'];
$columnabowser = $_GET['columna'];
$color = $_GET['color'];

if ($filabowser>$numerofilas){
    die ('el numero de fila de Bowser debe ser <= al numero de filas  ');
}
if ($filabowser>$numerocolumnas){
    die ('el numero de columna de Bowser debe ser <= al numero de columnas ');
}




?>