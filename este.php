<?php
// @titulo: Script solucionador reto #1
// @autor: http://www.sinfocol.org
$img   = imagecreatefrompng('images.png'); //Creamos la imagen apartir del archivo
$x     = imagesx($img);
$y     = imagesy($img);
$nueva = imagecreate($x,$y); //Creamos una nueva imagen que almacenará las diferencias
for ($i = 0; $i < $x; $i++) {
    for ($j = 0; $j < $y; $j++) {
        $color = imagecolorsforindex($img, imagecolorat($img, $i, $j));
        //Si el color es igual a blanco o a rojo ponemos un pixel blanco
        //El color de una imagen transparente, como el caso de este reto
        //y que no contiene datos, es representado por el color blanco
        //Con el irfanview se determino que el color era negro pero es
        //Por configuraciones del programa. La librería GD lo interpreta como blanco
        if ($color['red'] == 255 && ($color['blue'] == 255 && $color['green'] == 255 || $color['blue'] == 0 && $color['green'] == 0)) {
            $f = imagecolorexact($nueva, 255, 255, 255);
            imagesetpixel($nueva, $i, $j, $f);
        } else {
            //Si es diferente ponemos un pixel negro
            $f = imagecolorexact($nueva, 0, 0, 0);
            imagesetpixel($nueva, $i, $j, $f);    
        }
    }
}
//Mostramos la imagen con las diferencias
//header('Content-Type: image/png');
imagepng($nueva,'images1.png');