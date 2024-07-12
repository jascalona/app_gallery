<?php
  
if (!isset($_POST['create_directory'])) {
    
    $directory = $_POST['name_directory'];
    $URL = './DOC/Controller/Directory/';
    $ruta = $directory;

    if (!mkdir($directory,0777, true)) {
        echo 'Se creo su directorio con exito';
    } else {
        echo 'ha ocurrido un error';
    }

}


?>