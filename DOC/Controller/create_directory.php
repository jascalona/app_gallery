<?php

if (!isset($_POST['btn-c'])) {

    // Estructura de la carpeta deseada
    $estructura = './JJJ/DOS/';
    
    // Para crear una estructura anidada se debe especificar
    // el parámetro $recursive en mkdir().
    
    if(!mkdir($estructura, 0777, true)) {
       // die('Fallo al crear las carpetas...');
    }
    
    // ...



}


?>