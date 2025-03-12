<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            height: 80%;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
            border: 1px solid black;
        }
    </style>


</head>
<body>
    <?php
        $ncolumnas = $_GET['ncolumnas'];
        $nfilas = $_GET['nfilas'];
        $color = $_GET['color'];

        $filas = $_GET['filas'];
        $columnas = $_GET['columnas'];

        if($filas>$nfilas || $columnas>$ncolumnas){
            echo "Error, las coordenadas no pueden ser mayores que el tamaño del tablero";
        }

    ?>

    <table border="1" style="border-collapse: collapse;"">
        <?php for ($i=0; $i < $nfilas; $i++) { ?>
            <tr>
                <?php for ($j=0; $j < $ncolumnas; $j++) { ?>
                    <td
                    <?php if ($i+1 == $filas && $j+1 == $columnas) { 
                            echo "style='background-color: #FFC000 ;'";
                            
                        } else {
                             if ($i % 2 == 0 && $j % 2 == 0) { 
                            echo "style='background-color: $color;'";
                            } else { if ($i % 2 != 0 && $j % 2 != 0) {
                             echo "style='background-color: $color;'";
                                } 
                            } 
                        }
                    
                    ?> 
                        >
                     <?php if ($i+1 == $filas && $j+1 == $columnas) { ?>
                        <img src="images/Bowser.PNG" alt="Bowser" width="30" height="30">
                    <?php } ?>

                    </td>
                <?php   } ?>
            </tr>
        <?php } ?>

    </table>



</body>
</html>