<?php
  include("conexion.php");
  date_default_timezone_set('America/Mexico_City');
  $fecha = date("Y,m,d"); 
  
    session_start();
    //error_reporting(0);
    if(isset($_SESSION['user'])){
    $session_user = $_SESSION['user'];
    $consulta = mysqli_query($link, "SELECT * FROM registro WHERE user = '$session_user'");
    $row = mysqli_fetch_assoc($consulta);
    $registro_id  = $row['ID'];
    //echo $registro_id;
  } 

    //basename();
    if (isset($_FILES['file']['name'])){
        $nombre_base = $_FILES['file']['name'];
        $id_categoria = $_POST['options'];    
        $titulo = $_POST['titulo'];
        $fecha = date("Y,m,d"); 
        $ruta = "../archivos/".$nombre_base;
        $subirarchivo = move_uploaded_file($_FILES['file']['tmp_name'],$ruta);
        if ($subirarchivo) {
          $insertsql = mysqli_query($link,"INSERT INTO uploads(titulo, ruta, fecha, nombre, registro_id, categoria_id) VALUES('$titulo','$ruta','$fecha','$nombre_base','$registro_id','$id_categoria')");  
          if($insertsql){
            exit('success');
          }else{
            echo exit("Error al subir el archivo");
          }
        }else{
          echo "error";
        }
      }else{
        exit("archivo vacio");
      }