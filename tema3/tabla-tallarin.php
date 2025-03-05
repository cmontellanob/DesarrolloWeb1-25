<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<table border="1" style ="border-collapse:collapse;">
 <?php 
 $n=$_POST['n'];
 $m=$_POST['m'];
 

 for ($i=0;$i<$n;$i++)
     {
        ?>
        <tr>
        <?php    
        for ($j=0;$j<$n;$j++)
        {
            ?>
             <td><?php echo $j ?></td>
             <?php
        }
        ?>
        </tr>
        <?php 
     }
 
?> 
</table>
</body>
</html>