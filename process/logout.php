<?php 

    session_start();
    $session_user = $_SESSION['user'];
    if ($session_user = null || $session_user = "") {
            echo "no se puede";
    }

    session_destroy();
    header("location: ../index.php");
    
?>