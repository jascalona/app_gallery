<?php

$list = null;
$directorio = opendir("Directory");
while ($elemento = readdir($directorio)) {
    

    if($elemento != '.' && $elemento != '..')
    if (is_dir("./Directory/" . $elemento)) {

        
        //validar imprimir la lista de los archivos en el ind.php
    $listar .= "<li><i class='bx bxs-folder-open' style='color:#DDCE78'></i><a href='./Directory/ind.php' target='_blank'>$elemento</a>
          
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