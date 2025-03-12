<?php session_start();
$n = $_SESSION['n'];

$suma = 0;

for( $i = 0; $i < $n; $i++ ) {
    $suma+=$_POST['sumando'.$i];
}

echo "el valor de la suma es" . $suma;
?>