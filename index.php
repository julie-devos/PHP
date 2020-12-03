<?php
//size: 256x256
function my_merge_image(...$images){ // ... transforme en tableau tous mes paramètres entrés ; (param variables)
    $width_backg = 2600; //=1000px
    $height_backg = 1200;

// création d'une nouvelle image couleur (crée l'image vide pour la fusion) :
    $img = imagecreatetruecolor($width_backg, $height_backg);

    // allouer les couleurs à l'image (255=white + 0 à 127 transparence).
    $background = imagecolorallocatealpha($img, 255, 255, 255, 127);
    imagefill($img, 0, 0, $background);
    imagealphablending($img, false);
    imagesavealpha($img, true);


    $files = $images;
// met les images du tableau "$images".
    foreach ($files as $img_path){
//  list($x, $y) = getimagesize($img_path);
        $image = imagecreatefrompng($img_path);
    }

    foreach ($files as $key => $image){
        static $pos;
        $image_obj = imagecreatefrompng($image);

        if (imagesx($image_obj) && (imagesy($image_obj))>=260) {

            imagecopyresized($img, $image_obj, $pos,0, 0, 0, 256, 256, $width_backg, $height_backg);
        } else {
            imagecopy($img, $image_obj, $pos, 0, 0, 0, 256, 256);
        }
// j'impose une marge :
        $pos+=imagesx($image_obj)+20;
    }

// affichage du sprite :
    imagepng($img, "ff_img.png");
}

my_merge_image("1.png", "2.png", "3.png", "4.png", "5.png", "6.png", "7.png", "8.png");
?>
