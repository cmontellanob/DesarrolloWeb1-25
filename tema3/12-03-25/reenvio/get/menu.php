<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

?>
<ul>
    <li><a href="calcular.php?op=sumar<?php echo "&a=$a&b=$b&c=$c"; ?>">Sumar</a></li>
    <li><a href="calcular.php?op=restar<?php echo "&a=$a&b=$b&c=$c"; ?>">Restar</a></li>
    <li><a href="calcular.php?op=multiplicar<?php echo "&a=$a&b=$b&c=$c"; ?>">Multiplicar</a></li>
    <li><a href="calcular.php?op=dividir<?php echo "&a=$a&b=$b&c=$c"; ?>">Dividir</a></li>
</ul>

</body>
</html>


