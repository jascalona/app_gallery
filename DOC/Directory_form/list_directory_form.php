<?php

// List directory 
$list = null;
$rute_directory = opendir("Directory_form");
while ($elemento = readdir($rute_directory)) {

    if($elemento != '.' && $elemento != '..')
    if (is_dir("./Directory_form/" . $elemento)) {

    $listar .= "<li><i class='bx bxs-folder-open' style='color:#DDCE78'></i><a href='./Directory/$elemento' target='_blank'>$elemento</a></li>";

    }

}

