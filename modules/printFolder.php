<html>

<ul>
          
            <?php
$path = "./folders";
$ficheros = scandir($path);
foreach($ficheros as $key => $fichero){
    if($fichero != "." && $fichero != ".."){
        $rutaCompleta = $path . '/' .$fichero;
        if (is_file($rutaCompleta)) {
            ?>
            <li style="list-style:none;">
            <i class="fa fa-folder"></i>
            <?php echo $fichero; ?>
        </li>
    <?php
    } else {
    ?>
        <li>
        <i class="fa fa-folder"></i>
            <?php echo $fichero; ?>
        </li>
    <?php
    }
}
}


	?>
    </ul>

</html>