<?php
$height=getheight(files)+10;
$width=$width_first+$width_second+20;
$img = imagecreatetruecolor($width, $height);
 $background = imagecolorallocatealpha($img, 255, 255, 255, 127);
 imagefill($img, 0, 0, $background);
 imagealphablending($img, false);
 imagesavealpha($img, true);
 ?>
