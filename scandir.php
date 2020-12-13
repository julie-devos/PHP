 <?php

 function my_scandir($dir_path){

   if ($handle = opendir('.')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != ".." && $entry != ".png") {

            echo "$entry\n";
        }
    }

    closedir($handle);
}
 }

 function my_scandir_1($dir_path) {

     return $images = glob($dir_path . "/*.png"); //récupère tous les chemins en vérifiant un "masque" (le pattern .png)
 }

 $scan = my_scandir_1($argv[1]);

 ?>
