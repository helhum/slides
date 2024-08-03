<?php
//error_reporting(0);

// The file
$filename = __DIR__ . '/' . basename($_GET['img']);
// Get new dimensions
[$width, $height] = getimagesize($filename);
$percent = (int)($_GET['x'] ?? 1000) / $width;

$new_width = round($width * $percent);
$new_height = round($height * $percent);

// Resample
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

// Content type
header('Content-Type: image/jpeg');

// Output
imagejpeg($image_p, null, 90);
imagedestroy($image_p);
