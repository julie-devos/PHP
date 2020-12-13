<?php
//size: 256x256

function my_merge_image (...$images){ // ... transforme en tableau tous mes paramètres entrés ; (arguments variables)
  $width_backg = 5600;
  $height_backg = 256;
// création d'une nouvelle image couleur (crée l'image vide pour le sprite) :
  $img = imagecreatetruecolor($width_backg, $height_backg);

  // allouer les couleurs à mon background sprite (255=white + 0 à 127 transparence).
  $background = imagecolorallocatealpha($img, 255, 255, 255, 127);
  imagefill($img, 0, 0, $background); //effectue un remplissage du fond, avec la couleur $background
  imagesavealpha($img, true); //active la transparence


$files = $images;
// je mets $images dans une nouvelle variable pour la passer en tableau :
foreach ($files as $img_path) {
  $image = imagecreatefrompng($img_path);
// $image devient une valeur de tableau pour le sprite
}

// Création d'un foreach
foreach ($files as $key => $image){

  list($x, $y) = getimagesize($image);
// Création de la position statique pour le placement en ligne
static $pos;
// Création de la variable $objet pour en recréer une image:
  $image_obj = imagecreatefrompng($image);

//condition pour les images trop grandes :
  if (imagesx($image_obj) && (imagesy($image_obj))>256) {
    imagecopyresized($img, $image_obj, $pos,0, 0, 0, 256, 256, $x, $y);
    } else {
    imagecopy($img, $image_obj, $pos, 0, 0, 0, 256, 256);
    }
    // je les place de gauche à droite;
    $pos+=imagesx($image_obj);
  }

// affichage du sprite :
imagepng($img, "pacman_img.png");
}
my_merge_image("0.png", "1.png", "2.png", "3.png", "4.png", "5.png","6.png");
?>
