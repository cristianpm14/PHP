<?php
$width=200;
$height=60;
$image=imagecreatetruecolor($width,$height);
$yellow=ImageColorAllocate($image,255,255,0);
imagefilledrectangle($image, 4, 4, 195, 55, $yellow);
$blue=ImageColorAllocate($image,0,0,255);
ImageString($image, 10, 50, 25, "BOTON", $blue);
Header ("Content-type: image/jpeg");
ImageJPEG ($image);
ImageDestroy($image);