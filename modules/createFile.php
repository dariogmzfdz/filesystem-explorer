<html>

                <div class="tab-pane active documents documents-panel">
                 

            <?php
$path = "./uploads";
$ficheros = scandir($path);
foreach($ficheros as $key => $fichero){
    if($fichero != "." && $fichero != ".."){
        $rutaCompleta = $path . '/' .$fichero;
        if (is_file($rutaCompleta)) {
          
            ?> 
            <div class="document">
                    
                    
             <div class="document-body">
            
            <i class="fa fa-file-pdf-o text-danger"></i></div>
       
            <div class="document-footer">
                            <span class="document-name"> 
                           
                       
        <?php echo $fichero; ?>
    </span>  
</div> </div>
       
    <?php
    } else {
    ?>
        <li>
            <img width="10px" height="10px" src="img/folder.png">
           
        </li>
    <?php
    }
}
}


	?>
    </div>
    </div>
    </div>

     
   </html>

