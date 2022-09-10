<?php
include("modulos/db.php");
include("modulos/funciones.php");
destroyAdmin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
    <title>Escuelas y titulos</title>
      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                <!-- Core theme JS-->
                <script src="js/scripts.js"></script>
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
    <h1 class="text-center display-4 pb-5 mb-2 mt-4"  style="padding-top: 5rem;">Carga y control de Titulo  Secundario</h1>
    <!-- !Titulo -->
    <div class="container-fluid mt-2 p-0">
        <!-- Body -->
        <div class="container pb-2 bg-white card-shadow">
          <!--formulario de registro -->
            <form action="../modules/regModPat.php" method="post">
                <div class="form-row pt-2">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Apellido y Nombre</label>
                    <input type="text" class="form-control" id="validationCustom01" name="nombre" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Escuela</label>
                    <input type="text" class="form-control" id="validationCustom02" name="apellido" required>
                  </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="inputMail">Titulo Secundario</label>
                      <input type="text" class="form-control" id="inputMail" aria-describedby="emailHelp" name="email" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Distrito</label>
                        <input type="text" class="form-control" id="validationCustom03" name="dni" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Resolucion</label>
                        <input type="text" class="form-control" id="validationCustom03" name="ent_soc" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Carga Observaciones</label>
                        <input type="text" class="form-control" id="validationCustom03" name="dni" required>
                    </div>
                  
</body>
</html>