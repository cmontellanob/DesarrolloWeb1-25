<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $n=$_GET['n']; ?>
    
    <form action="sumar.php" method="post">
         <?php for ($i=0;$i<$n;$i++) {?>   
        <input type="number" name="sumando[]"> <br>
        <?php } ?>
        <input type="submit" value="Sumar">
       
    </form>


</body>
</html>