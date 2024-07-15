<?php

if (!empty($_POST['btn-c'])) {

    // Variable Name_directory
    $directory = $_POST['name_folder'];

    
    if(!mkdir($directory, 0777, true)) {
        die('Ha Ocurrido un Error');

    } else {
        header('location: http://localhost/app_gallery/DOC/doc.php');
    }
    
    // ...



}


?>