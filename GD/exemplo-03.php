<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 315, 150, $titleColor, realpath("Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf"), "CERTIFICADO");
imagettftext($image, 32, 0, 260, 350, $titleColor, realpath("Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf"), utf8_decode("Eraldo Vicente de Brito Júnior"));
imagestring($image, 3, 260, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

echo realpath("Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf");

header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

?>