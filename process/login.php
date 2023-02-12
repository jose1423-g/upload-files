<?php
include("./conexion.php");
session_start();

if (isset($_POST['login'])) {
    $user  = mysqli_real_escape_string($link, $_POST['userphp']);
    $pass = mysqli_real_escape_string($link, $_POST['passphp']);
    
    $consulta = mysqli_query($link, "SELECT * FROM registro WHERE user = '$user' AND pass = '$pass'");
    $count = mysqli_num_rows($consulta);
    if ($count > 0) {
        $_SESSION['user'] = $user;
        exit('success');
    } else {
        exit('User o password incorrect');
    }
}
