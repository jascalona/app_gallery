<?php

if (!empty($_POST['btn-d'])) {

    // Variable Name_directory
    $directory_form = $_POST['name_form'];

    if (!file_exists($directory_form)) {

        if(!mkdir($directory_form, 0777, true)) {
            die('<script>alert("Ha Ocurrido un Error!")</script>');

        } else {
            header('location: http://localhost/app_gallery/DOC/form_install.php');
        }
        

    } else{
        die ('<script>alert("Ya hay un elemento con el mismo nombre!")</script>');
    }


}


