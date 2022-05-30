 <?php 
 $dir = './uploads';
 $files = scandir($dir);
 $filecount = count($files);
 for ($i=0; $i <= $filecount ; $i++) { 
   if ($files[$i] != '.' && $files[$i] != '..') {
    echo '<p><a href= . $dir . '/' . $files[$i] .></a></p>';

   }
 }
 
?>