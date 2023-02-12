<?php  
    include("./conexion.php");
    date_default_timezone_set('America/Mexico_City');
    $fecha = date("Y,m,d"); 
    
        if(isset($_FILES['file']['name'])){  
            $imgfile  = $_FILES['file']['name'];  
            $usuario = $_POST['user'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $carrera = $_POST['carrera'];
            $nuncontrol =$_POST['nuncontrol'];
            $pass = $_POST['pass'];
            $ruta ="../img/".$imgfile;
            $imgupload = move_uploaded_file($_FILES['file']['tmp_name'], $ruta);
            if ($imgupload) {
                $mysql = mysqli_query($link,"INSERT INTO registro(nombre, apelllido, pass, fecha, Nocontrol, imagen, carrera, user, nombreimg) VALUES ('$nombre','$apellido','$pass','$fecha','$nuncontrol','$ruta','$carrera','$usuario','$imgfile')");
                if (!$mysql) {
                    echo exit('Error al subir la informacion');
                }else{
                    echo exit('success');
                }
            }else{
                echo exit("error en imgupload");
            }
            }else{
                echo exit("Selecciona una imagen");
            }
            
?>