<?php 

$conn = mysqli_connect("localhost","root","","support_kip");


$usu = $_POST['usuario'];
$pass = $_POST['password'];

$query= "SELECT * FROM usa where user='".$usu."' and password='".$pass."'";

$result= mysqli_query($conn,$query);
$cont=mysqli_num_rows($result);
if ($cont==1) {
    header("location: https://www.w3schools.com/php/php_mysql_connect.asp ");
}else{
    echo "no se encontro este usuario";
}

?>