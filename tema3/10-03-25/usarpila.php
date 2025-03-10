<?php include("pila.php");

$pila=new Pila();
$pila->insertar(1);
$pila->insertar(2);
$pila->insertar(3);
$pila->insertar(4);

$pila->mostrar();
echo "<hr>";
echo "elemento eliminado: ". $pila->eliminar()."<br>";
$pila->mostrar();
echo "<hr>";
echo "elemento eliminado: ".$pila->eliminar()."<br>";
$pila->mostrar();
echo "<hr>";
?>
