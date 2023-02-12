<?php 
include("./conexion.php");

if (isset($_POST['id'])) {
    $id = $_POST['id'];
        $delete = mysqli_query($link,"DELETE FROM uploads WHERE ID = $id");
            if ($delete) {
                exit("success");
            }else{
                exit("no se pudo eliminar");
            }
    
    
    
    }


?>