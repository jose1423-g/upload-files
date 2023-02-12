<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
        <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col col-sm-7 col-md-6 col-lg-4">
                    <form class="border border-primary py-3 px-2 rounded h-50" action="./login.php" method="POST">
                        <div class="alert alert-danger text-center" role="alert" id="errorlogin"><!--mensaje de error--></div>
                        <div class="mb-3">
                            <h2 class="text-center text-primary fw-bold">Bienvenido</h2>
                        </div>
                        <div class="mb-3">
                            <label for="user" class="form-label">User</label>
                            <input type="text" class="form-control" id="user" name="user">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control" id="pass" name="pass">
                        </div>
                        <button type="submit" class="btn btn-primary w-100" id="btn_login">Iniciar sesión</button>
                        <a class="nav-link mt-3 text-center text-info" href="./views/signup.php">Regístrate</a>
                    </form>
                </div>
            </div>
        </div>

       



    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</body>

</html>