<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col col-sm-7 col-md-6 col-lg-5">
                <form class="border border-primary py-3 px-2 rounded h-50" action="../process/registro.php" method="POST" id="form_signup">
                <div id="error-registro"><!--mserror--></div>
                    <div class="mb-3">
                        <h2 class="text-center text-primary fw-bold">Regístrate</h2>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="col mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nuncontrol" class="form-label">Numero de control</label>
                        <input type="text" class="form-control" id="nuncontrol" name="nuncontrol">
                    </div>
                    <div class="mb-3">
                        <label for="carrera" class="form-label">Carrera</label>
                        <input type="text" class="form-control" id="carrera" name="carrera">
                    </div>
                    <div class="mb-3">
                        <label for="imgfile" class="form-label">Selecciona una foto de perfil</label>
                        <input class="form-control" type="file" id="imgfile" name="file">
                    </div>
                    <div class="mb-3">
                        <label for="user" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="user" name="user">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass">
                    </div>
                    <button type="submit" class="btn btn-primary w-100" id="btn_signup">Regístrate</button>
                    <a class="nav-link mt-2 text-center text-info" href="../index.php">Login</a>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>    