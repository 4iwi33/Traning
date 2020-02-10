<?
header ("Content-type: image/png");
$im = imagecreatetruecolor(320, 240);
$ink = imagecolorallocate($im, 255, 255, 255);

// Стандартный прямоугольник
imagerectangle($im,80,60,240,180,$ink);

imagepng($im);
imagedestroy($im);
