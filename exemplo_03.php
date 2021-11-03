<?php

$font1=realpath("fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf");
$font2=realpath("fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf");

$image= imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image,100,100,100);

imagettftext($image, 32, 0, 150, 250,$titleColor,$font1,"CERTIFICADO");
 
imagettftext($image, 32, 440, 350, 250, $titleColor,$font2,"Divanei Aparecido");

imagestring($image, 3, 440, 370, utf8_decode("Concluído em: "). date("d/m/Y"), $titleColor);

header("Content-type:image/jpeg");

imagejpeg($image);

imagedestroy($image);

?>