
<H1>Tree Folder</H1>
<?php
$path = "./uploads";
$ficheros = scandir($path);
foreach($ficheros as $key => $fichero){
    if($fichero != "." && $fichero != ".."){
        $rutaCompleta = $path . '/' .$fichero;
        if (is_file($rutaCompleta)) {
            ?>
            <li>
            <img width="10px" height="10px" src="img/file.png">
            <?php echo $fichero; ?>
        </li>
    <?php
    } else {
    ?>
        <li>
            <img width="10px" height="10px" src="img/folder.png">
            <?php echo $fichero; ?>
        </li>
    <?php
    }
}
}