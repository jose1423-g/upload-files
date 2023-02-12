<?php
include('./process/conexion.php');
$mysql = mysqli_query($link, "SELECT * FROM categoria");
?>

<aside class="mt-2 d-block pt-2">
    <div class="d-flex justify-content-center align-items-center">
        <strong class="me-3">Subir nuevo archivo</strong>
        <a class="btn btn-primary" href="?v=<?php echo "views/file.php"; ?>">New</a>
    </div>
    <ul class="nav">
        <li class="nav-item"><a class="nav-link" href="main.php">Inicio</a></li>
        <?php while ($row = mysqli_fetch_assoc($mysql)) { ?>
            <li class="nav-item"><a class="nav-link" href="?p=<?php echo $row['ID']; ?>"><?php echo $row['tipo']; ?></a></li>
        <?php  } ?>
    </ul>
</aside>