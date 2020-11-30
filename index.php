<?php
header('content-type: text/css');
function my_merge_image ($first_img_path, $second_img_path){
  //img size by defaut
  $width = 1024;
  $height = 512;

  //Create new img from file with true color
  $first_img_path = imagecreatefrompng($first_img_path);
  $im = imagecreatetruecolor($width, $height);

  // copy and resize part of an img from the path and "paste" them side by side
  imagecopyresampled($im, $first_img_path, 0, 0, 0, 0, 1024, 1024, 1024, 1024);
  $second_img_path = imagecreatefrompng($second_img_path);
  imagecopyresampled($im, $second_img_path, 512, 0, 0, 0, 1024, 1024, 1024, 1024);

  //save png img from the given img ($im)
  //imagepng($im, "final_img.png");
}
?>
