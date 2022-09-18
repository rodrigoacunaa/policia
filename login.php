<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/imagenes/alto somos la polisia2.jpg" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg" style="background-color: darkblue;" >
            <div class="container px-4 px-lg-5">
                <img src="assets/imagenes/alto somos la polisia.jpg" width="40" height="40" class="mr-2 mb-1" alt="" id="logo"><b style="color : white; padding-left:15px;">Escuela de policia "juan Vucetich"</b>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        
                            </ul>
                        </li>
                    </ul>
                    <button class="btn btn-primary"onclick="bypass()">Regresar</button>
                    <form class="d-flex">
                    </form>
                </div>
            </div>
        </nav>
        <div style="padding:60px">
        <div class="container bg-white p-2 needs-validation registro" style="border: 1px solid #d0d0d0; max-width: 500px; height: 360px; padding-top: 10px;" novalidate>
            <h4 class="text-center my-4">Iniciar Sesión</h4>
            <form method="POST" action="modulos/loginMod.php" class="mx-2">
                <div class="form-group">
                    <label for="loginEmail">Correo Electronico</label>
                    <input type="email" name="email" class="form-control" id="loginEmail" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <label for="loginPass">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="loginPass" required>
                </div>
                <br>
                <button type="submit" name="submit" class="btn btn-primary" style="cursor: pointer;">Ingresar</button>
                <a class="btn btn-primary" style="cursor: pointer;" href="http://localhost/policia">Volver al inicio</a>
            </form>
        </div>
        </div>
        <div style="padding-top: 10%">
        <footer class="py-5 bg-dark  " id="footer"  >
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
       </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
    <script type="text/javascript">
        function bypass(){window.location="index.html";};
    </script>
</html>