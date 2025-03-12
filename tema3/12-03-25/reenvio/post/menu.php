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
    <li> <form action="calcular.php" method="post">
      <input type="hidden" name="op" value="sumar">
        <input type="hidden" name="a" value="<?php echo $a; ?>">
        <input type="hidden" name="b" value="<?php echo $b; ?>">
        <input type="hidden" name="c" value="<?php echo $c; ?>">
        <input type="submit" value="Sumar">
    </form> </li>
    <li>
    <form action="calcular.php" method="post">
      <input type="hidden" name="op" value="restar">
        <input type="hidden" name="a" value="<?php echo $a; ?>">
        <input type="hidden" name="b" value="<?php echo $b; ?>">
        <input type="hidden" name="c" value="<?php echo $c; ?>">
        <input type="submit" value="Restar"> 

    </li>
    <li>
    <form action="calcular.php" method="post">
      <input type="hidden" name="op" value="multiplicar">
        <input type="hidden" name="a" value="<?php echo $a; ?>">
        <input type="hidden" name="b" value="<?php echo $b; ?>">
        <input type="hidden" name="c" value="<?php echo $c; ?>">
        <input type="submit" value="Multiplicar">
    </li>
    <li>
    <form action="calcular.php" method="post">
      <input type="hidden" name="op" value="dividir">
        <input type="hidden" name="a" value="<?php echo $a; ?>">
        <input type="hidden" name="b" value="<?php echo $b; ?>">
        <input type="hidden" name="c" value="<?php echo $c; ?>">
        <input type="submit" value="Dividir">
    </li>
</ul>

</body>
</html>


