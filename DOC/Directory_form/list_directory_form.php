<?php

// List directory 
$list = null;
$rute_directory = opendir("Directory_form");
while ($elemento = readdir($rute_directory)) {

    if($elemento != '.' && $elemento != '..')
    if (is_dir("./Directory_form/" . $elemento)) {

        $listar .= "<li><i class='bx bxs-folder-open' style='color:#DDCE78'></i><a href='./Directory/$elemento' target='_blank'>$elemento</a>
          
                        <button  style='border: none; position: absolute; margin-left: 60%;' type='button' class='btn' data-bs-toggle='dropdown'>
                            <i class='bx bx-dots-horizontal-rounded'></i>
                        </button>   
                            <ul style='margin-right: ; width: auto;' class='dropdown-menu dropdown-menu-dark'>
                                <li><button class='dropdown-item' type='button'><i class='bx bx-folder-open'></i>Abrir</button></li>
                                <li><button class='dropdown-item' type='button'><i class='bx bx-code-alt'></i>Gestional enlace</button></li>
                                <li><button class='dropdown-item' type='button'><i class='bx bxs-star-half' ></i>Agregar a Favoritos</button></li>
                                <li><button class='dropdown-item' type='button'><i class='bx bx-trash'></i>Mover a la papelera</button></li>
                            </ul>

                    </li>";
    }

}

