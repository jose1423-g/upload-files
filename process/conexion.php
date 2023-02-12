<?php  

$servername = "localhost";
$username = "root";
$password =  "";
$database = "db_central";


$link = mysqli_connect($servername,$username,$password,$database);

    if (!$link) {
        die("connection failed:" .mysqli_connect_error());
    }else{
        //echo "Conexion exitosa";
    }

?>
