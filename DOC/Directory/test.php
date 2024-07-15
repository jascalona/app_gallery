<?php

// Estructura de la carpeta deseada
$estructura = './nivel1/nivel2/nivel3/';

// Para crear una estructura anidada se debe especificar
// el parámetro $recursive en mkdir().

if(!mkdir($estructura, 0777, true)) {
    die('Fallo al crear las carpetas...');
}

// ...
?>