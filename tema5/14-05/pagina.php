<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <ul class="menu">
            <li><a href="">logo</a></li>
            <li><a href="javascript:listar()">Agenda</a></li>
            <li><a href="javascript:cargarContenido('readprofesiones.php')">Profesion</a></li>
            <li><a href="javascript:cargarContenido('cerrar.php')">salir</a></li>
        </ul>
        <div id="contenido">


        </div>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="titulo-modal">Título del Modal</h2>
            <div id="contenido-modal">

            </div>
        </div>
    </div>

</body>

</html>