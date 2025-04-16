<?php
$valor=rand(1, 3);
$vector = [
    1 => "zend.png",
    2 => "laravel.png",
    3 => "cake.png"
];
$imagen = imagecreatefrompng("images/".$vector[$valor]);
header("Content-Type: image/png");
imagepng($imagen);
?>
