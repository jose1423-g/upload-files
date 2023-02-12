<?php  
    include("./process/conexion.php");
        $obtener = mysqli_query($link,"SELECT * FROM categoria ORDER BY ID");       
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-sm-8 col-md-7 col-lg-7">
            <form class="border border-primary py-3 px-2 rounded mt-5" action="./process/upload.php" method="POST" enctype="multipart/form-data" id="form_file">
                <div id="errorfile"><!--mensaje--></div>
                <div class="mb-3">
                    <h2 class="text-center text-primary fw-bold">Archivos</h2>
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label">Titulo</label>
                    <input class="form-control" type="text" id="titulo" name="titulo">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Selecciona un archivo</label>
                    <input class="form-control" type="file" id="formfile" name="file">
                </div>
                <div class="mb-3">
                <select class="form-select select" aria-label="Default select example" id="options" name="options">
                    <option value="0">Selecciona la categoria</option>
                    <?php  while ($row = mysqli_fetch_assoc($obtener)) { ?>
                    <option value="<?php echo $row['ID'];?>"><?php echo $row['tipo']; ?></option>
                    <?php  } ?>
                </select>
                </div>
                <button class="btn btn-primary w-100" type="submit" id="btn_file">Enviar</button>
            </form>
        </div>
    </div>
</div>
