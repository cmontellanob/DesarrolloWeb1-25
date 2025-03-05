<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];

    if($num1>$num2){
        if($num1>$num3){
            echo "$num1 el mayor ";
        }
        else
            {echo "$num3 el mayor ";}
    }
    else    
         if  ($num2>$num3){
            echo "$num2 es mayor";
        }
        else
        {
            echo "$num3 es mayor";
        }
    
    ?>





</body>
</html>