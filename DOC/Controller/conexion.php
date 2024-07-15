<?
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'app_gallery';

// CRAETE CONNECTION
$conexion = mysqli_connect($server, $user, $password, $db);

// CHECK CONNECTION

if (!$conexion) {
    die('<script>alert("Conexion Fallida!")</script>' . mysqli_connect_error());
} else {

    echo ('<script>alert("Conexion Exitosa!")</script>');
}