<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #contenedor {
            display: grid;
            /* grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 1fr 1fr; */
            grid-template: repeat(2, 1fr) / repeat(3, 1fr);
            gap: 10px;
            width: 80%;
            margin: 0 auto;
        }

        .red {
            background-color: rgb(228, 140, 140);
        }

        .blue {
            background-color: rgb(140, 168, 228);
        }

        .green {
            background-color: rgb(149, 245, 126);
        }

        .yellow {
            background-color: rgb(225, 240, 94);
        }

        .otro {
            background-color: rgb(188, 140, 228);
        }

        .uno {
            background-color: rgb(122, 145, 38);
        }
        .texto {
            font-weight: bold;
            padding: 10px;
        }
    </style>
</head>

<?php
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$sexo = $_GET['sexo'];
$dirrecion = $_GET['dirrecion'];
$celular = $_GET['celular'];
$correo = $_GET['correo'];
?>

<body>
    <div id="contenedor">
        <div class="red texto">Nombres:<?php echo $nombre; ?></div>
        <div class="blue texto">Apellido:<?php echo $apellido ?></div>
        <div class="green texto">sexo: <?php echo $sexo; ?></div>
        <div class="yellow texto">Direccion:<?php echo $dirrecion; ?></div>
        <div class="otro texto">Celular:<?php echo $celular; ?></div>
        <div class="uno texto">Correo:<?php echo $correo; ?></div>
    </div>
</body>

</html>