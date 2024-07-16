<?php

if (!empty($_POST['btn-c'])) {

    // Variable Name_directory
    $directory = $_POST['name_folder'];

    
    if(!mkdir($directory, 0777, true)) {
        die('<script>alert("Ha Ocurrido un Error!")</script>');

    } else {
        echo ('<script>alert("Directorio creado con Exito!")</script>');
        header('location: http://localhost/app_gallery/DOC/doc.php');
    }
    


}


?>