<?php

if (!empty($_POST['btn-d'])) {

    // Variable Name_directory
    $directory_form = $_POST['name_form'];

    
    if(!mkdir($directory_form, 0777, true)) {
        die('<script>alert("Ha Ocurrido un Error!")</script>');

    } else {
        echo ('<script>alert("Directorio creado con Exito!")</script>');
        header('location: http://localhost/app_gallery/DOC/form_install.php');
    }
    


}


