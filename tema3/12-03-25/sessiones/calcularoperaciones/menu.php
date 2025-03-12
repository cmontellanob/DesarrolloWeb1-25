<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php session_start();
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$_SESSION['a']=$a;
$_SESSION['b']=$b;
$_SESSION['c']=$c;


?>
<ul>
    <li><a href="calcular.php?op=sumar">Sumar</a></li>
    <li><a href="calcular.php?op=restar">Restar</a></li>
    <li><a href="calcular.php?op=multiplicar">">Multiplicar</a></li>
    <li><a href="calcular.php?op=dividir">Dividir</a></li>
</ul>

</body>
</html>


