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

 ?>
