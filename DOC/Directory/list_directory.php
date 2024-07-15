<?php

$list = null;
$directorio = opendir("Directory");
while ($elemento = readdir($directorio)) {
    if (is_dir("./Directory/" . $elemento)) {

    $listar .= "<li><i class='bx bxs-folder-open' style='color:#eac11a'></i><a href='./Directory/$elemento' target='_blank'>$elemento</a></li>";

    }   

}

?>