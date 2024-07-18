<?php

$list = null;
$directorio = opendir("Directory");
while ($elemento = readdir($directorio)) {
    
    if($elemento != '.' && $elemento != '..')
    if (is_dir("./Directory/" . $elemento)) {

    $listar .= "<li><i class='bx bxs-folder-open' style='color:#DDCE78'></i><a href='./Directory/$elemento' target='_blank'>$elemento</a></li>";

    }

}