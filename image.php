<?php
// Create a 55x30 image
$im = imagecreatetruecolor(200, 200);
$white = imagecolorallocate($im, 255, 255, 255);
$blue = imagecolorallocate($im, 0, 0, 255);
$green = imagecolorallocate($im, 0, 255, 0);
$red = imagecolorallocate($im, 255, 0, 0);
$black = imagecolorallocate($im, 0, 0, 0);
$yellow = imagecolorallocate($im, 255, 255, 0);

// Draw a filled rectangle
//imagefilledrectangle($im, 0, 0, 199, 199, $blue);
//imagefilledrectangle($im, 0, 0, 199, 199, $green);
//imagefilledrectangle($im, 0, 0, 199, 199, $black);
//imagefilledrectangle($im, 0, 0, 199, 199, $red);
imagefilledrectangle($im, 0, 0, 199, 199, $yellow);

// Save the image
header('Content-Type: image/png');
imagePNG($im);
imagedestroy($im);
?>
