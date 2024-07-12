<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./IMG/x.png">
    <title>DOC</title>

    <!-- CSS // FRAMEWORK-->
     <link rel="stylesheet" href="./CSS/doc.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- CSS // FRAMEWORK-->

    <!-- ICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- ICONS -->

    <!-- Script // FRAMEWORK -->
    <script src="./JS/Bootstrap.js"></script>
    <!-- Script // FRAMEWORK -->



</head>
<body>
    
    
        <header>
            <div class="logo">
                <img src="./IMG/x.png" alt="">
            </div>

            <div class="header">
                <ul class="header-links">

                    <div style="padding-right: 15px;" class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Subir...
                        </button>
                        <ul class="dropdown-menu">
                          <li><input type="file"></li>
                          <li><a class="dropdown-item" href="#">Directorio</a></li>
                        </ul>
                      </div>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                        Crear Directorio
                    </button>

                        <?php
                            include "./Controller/create_directory.php";    
                        ?>

                            <!-- method POST -->
                        <form action="" method="POST">

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Directorio</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="folder" placeholder="Nombre del Directorio">
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" name="create_directory" value="submit" class="btn btn-primary">Crear</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            </form>

                    <li><a href=""><i class='bx bx-list-ul'></i></a></li>
                    <li><a href=""><i class='bx bxs-grid'></i></a></li>

                </ul>
            </div>
            
        </header>

        <nav>
            <div class="title">
                <h4>Unidad</h4>
            </div>

            <ul class="nav-links">
                <li><i class='bx bx-cloud-light-rain' ></i><a href="">Nube</a></li>
                <li><i class='bx bxs-bookmark-star' ></i><a href="">Favoritos</a></li>
                <li><i class='bx bx-file' ></i><a href="">Formatos de Instalacion</a></li>
            </ul>
        </nav>
        

</body>
</html>