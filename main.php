<?php
include("./process/conexion.php");
session_start();
//error_reporting(0);
    $session_user = $_SESSION['user'];
    $consulta = mysqli_query($link, "SELECT * FROM registro WHERE user = '$session_user'");
    $row = mysqli_fetch_assoc($consulta);
    $registro_id  = $row['ID'];
    //echo $registro_id;
    if ($session_user == null || $session_user = "") {
        //echo "No has iniciado session";
        echo header("location: ./index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <?php include('./components/header.php') ?>

    <main class="">
        <div class="container-fluid">
            <div class="row vh-100 flex-nowrap">
                <div class="col-3 d-none d-lg-block bg-light">
                    <?php include('./components/aside.php') ?>
                </div>
                <div class="col">
                    <?php  
                        if (isset($_GET['p'])) {
                            $p = $_GET['p'];
                            $consulta = mysqli_query($link, "SELECT * FROM categoria WHERE ID = '$p'");
                            while ($row = mysqli_fetch_assoc($consulta)) { 
                                $tipo = $row['tipo'];  ?>
                            <h2 class="mt-3 text-center"><?php echo $tipo; ?></h2>
                        <?php } }?>
                    <div class="mt-3 d-block d-md-flex flex-wrap justify-content-center">
                        <?php
                        if (isset($_GET['p'])) {
                            $p = $_GET['p'];
                            $consulta = mysqli_query($link, "SELECT * FROM uploads WHERE categoria_id = '$p' AND registro_id = '$registro_id'");
                            while ($row = mysqli_fetch_assoc($consulta)) { 
                                $rutadescarga = "./archivos/".$row['nombre'];
                                $id = $row['ID'];
                                $titulo = $row['titulo'];
                                $fecha = $row['fecha'];
                                $nombre = $row['nombre'];
                                ?>
                                <div class="card me-md-3 mt-2 border-primary">
                                    <div class="card-body text-center">
                                        <h5 class="text-primary">Titulo del archivo</h5>
                                        <h2><?php echo $titulo; ?></h2>
                                        <h5 class="text-primary">Fecha</h5>
                                        <p><?php echo $fecha; ?></p>
                                        <h5 class="text-primary">Nombre de archivo</h5>
                                        <a class="text-" download="<?php echo $nombre ?>" href="<?php echo $rutadescarga;?>"><?php echo $nombre ?></a><br>
                                        <button class="delete btn btn-danger mt-2"  id='del_<?php echo $id; ?>' data-id='<?php echo $id; ?>'>Eliminar archivo</button>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } elseif (isset($_GET['v'])) {
                            include_once('./views/file.php');
                        } else {
                            echo '<h2 class="me-2 text-center">Bienvenid@</h2>'."<h2 class='text-center'>".$_SESSION['user']."</h2>";
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>




    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</body>

</html>