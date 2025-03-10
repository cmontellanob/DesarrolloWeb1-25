<?php
$suma = 0;
foreach ($_POST['sumando'] as $valor) {
    $suma+=$valor;
}
echo "el valor de la suma es" . $suma;
?>