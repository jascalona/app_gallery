<?php

$list = null;
$directorio = opendir("Directory");
while ($elemento = readdir($directorio)) {
    
    if($elemento != '.' && $elemento != '..')
    if (is_dir("./Directory/" . $elemento)) {

    $listar .= "<li><i class='bx bxs-folder-open' style='color:#DDCE78'></i><a href='./Directory/$elemento' target='_blank'>$elemento</a>
          
                    <button  style='border: none; position: absolute; padding-right: %;' type='button' class='btn' data-bs-toggle='dropdown'>
                        <i class='bx bx-dots-horizontal-rounded'></i>
                    </button>   
                        <ul class='dropdown-menu dropdown-menu-end'>
                            <li><button class='dropdown-item' type='button'>Action</button></li>
                            <li><button class='dropdown-item' type='button'>Another action</button></li>
                            <li><button class='dropdown-item' type='button'>Something else here</button></li>
                        </ul>
        

        
        
    </li>";

    }

}