<?php
include("modulos/db.php");
include("modulos/funciones.php");
destroyAdmin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga de nuevo alumno</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/imagenes/alto somos la polisia2.jpg" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg" style="background-color: rgb(0, 0, 139);" >
            <div class="container px-4 px-lg-5">
                <img src="assets/imagenes/alto somos la polisia.jpg" width="30" height="30" class="mr-2 mb-1" alt="" id="logo"><b style="color:white; padding-left:10px;">Escuela de policia "juan Vucetich"</b>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                            </ul>
                        </li>
                    </ul>
         <div>
           <form action="admin.php ">
            <button class="btn btn-dark" type="submit"><i class="bi bi-arrow-90deg-left"></i>
            </button>
             </form>
           </div>
             <!--!logout -->
                    </form>
                </div>
            </div>
        </nav>
      <!-- Titulo -->
          <div class="container text-center mt-4 vh-100" style="margin_left: 50px;">
                            <h1 class="display-4 pb-5 mb-2 mt-4"  style="padding-top: 5rem;">Baja del alumno</h1>
                             <form class="row">
                            <div class="col-auto ms-auto">
                                <label for="staticEmail2" class="visually-hidden">Email</label>
                                <select class="form-select" aria-label="Default select example">
                                <option selected>Eliga un alumno</option>
                                
                                <?php 
                                while($datos = mysqli_fetch_array($query)){
                                ?>
                                <option value="<?php echo $datos['id'] ?>" ><?php echo $datos['email'] ?></option>
                                <?php 
                                }
                                ?>
                                </select>
                            </div>
                            <div class="col-auto">
                                <label for="inputPassword2" class="visually-hidden">Password</label>
                                <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                            </div>
                            <div class="col-auto">
                                <input type="date">
                            </div>
                            <div class="col-auto me-auto">
                                <button type="submit" class="btn btn-primary mb-3">Confirmar</button>
                            </div>
                            </form>
                    </div> 


        <footer class="py-5 bg-dark sticky-footer">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

</body>
</html>