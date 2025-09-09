<?php
session_start();

// generate random code
$text = rand(10000, 99999);
$_SESSION["vercode"] = $text;

$height = 25;
$width  = 65;

// create image
$image_p = imagecreate($width, $height);

// colors
$black = imagecolorallocate($image_p, 0, 0, 0);
$white = imagecolorallocate($image_p, 255, 255, 255);

// set header for jpeg
header("Content-Type: image/jpeg");

// draw string (use font 5 for bigger size)
imagestring($image_p, 5, 8, 5, $text, $white);

// output
imagejpeg($image_p, null, 80);
imagedestroy($image_p);
?>
