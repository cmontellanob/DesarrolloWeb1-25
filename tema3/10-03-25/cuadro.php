<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #cuadro{
            border: 1px solid black;
            background-color: <?php echo $_POST['color_fondo'];?>;
            color: <?php echo $_POST['color'];?>;
            width: 200px;
            margin: auto;
            padding: 20px;
            text-align: center ;
        }
    </style>
</head>

<body>
    
<?php
$nombre = $_POST['nombre'];
echo '<div id="cuadro">';
echo $nombre;
echo '</div>'
?>
</body>
</html>
