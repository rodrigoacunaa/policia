<?php
include("modulos/loginMod.php");
include("modulos/funciones.php");
$email = $_SESSION['email'];
destroyAdmin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
    <title>Datos de interes</title>
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
                <img src="assets/imagenes/alto somos la polisia.jpg" width="40" height="40" class="mr-2 mb-1" alt="" id="logo"><h5 style="color:white; padding-left:20px;padding-top:auto">Escuela de Policia "Juan Vucetich"</h5>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                            </ul>
                        </li>
                    </ul>
         <div>
            <button class="btn btn-primary" name="logout" type="submit" onclick="bypass();">Regresar</button>
           </div>
             <!--!logout -->
             </form>
                </div>
            </div>
        </nav>
          <!-- Titulo -->
    <h1 class="text-center display-4 pb-5 mb-2 mt-4"  style="padding-top: 5rem;">Carga de datos de: Domicilio- Comisaria del domicilio- destino</h1>
    <!-- !Titulo -->
    <div class="container-fluid mt-2 p-4">
                  <!--formulario de registro -->
        <form action="modulos/cargardatosmod.php" method="post">
            <div class="form-row pt-2">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Domicilio</label>
                    <input type="text" class="form-control" id="validationCustom01" name="domicilioid" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Localidad</label>
                    <input type="text" class="form-control" id="validationCustom02" name="localidadid" required>
                  </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="inputMail">Codigo postal</label>
                      <input type="text" class="form-control" id="inputMail" aria-describedby="emailHelp" name="codigopostalid" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Comisaria Domicilio</label>
                        <input type="text" class="form-control" id="validationCustom03" name="comisariadomicilioid" required>
                    </div>
                    </div>
               
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Destino</label>
                        <input type="text" class="form-control" id="validationCustom03" name="destinoid" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Telefono destino</label>
                        <input type="text" class="form-control" id="validationCustom03" name="telefonodestinoid" required>
                    </div>
                </div>
                <button type="button" class="btn btn-primary px-5 " style="margin-left:43%">Cargar Datos</button>
                </div>
                
                </form>
                </div>

                  
             