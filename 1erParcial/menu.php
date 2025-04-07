<?php include("Clase.php");
    session_start();
    if (isset($_POST['item'])) {
    $item = $_POST['item'];
    $color = $_POST['color'];
    $color_fondo = $_POST['color_fondo'];
    $imagen = "images/" . basename($_FILES["imagen"]["name"]);
    copy($_FILES["imagen"]["tmp_name"], $imagen);

    $_SESSION['obj'] = new Clase($item, $color, $color_fondo, $imagen);
    
}?>
    <ul>
        <li><a href="ver.php?figura=cuadrado">Cuadrado</a></li>
        <li><a href="ver.php?figura=diagonal">Diagonal</a></li>
    </ul>
    


