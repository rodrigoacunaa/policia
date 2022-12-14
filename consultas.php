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
        <title></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/imagenes/alto somos la polisia2.jpg" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
    <style>
            #card{
                width: 220px;
                height: 195px ;
            };
        </style>
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
         <div><form action="modulos/logout.php" method="post">
            <button class="btn btn-dark" name="logout" type="submit">Logout</i></button>
            </form>
           </div>
             <!--!logout -->
                    </form>
                </div>
            </div>
        </nav>
             <!--!logout -->    
                    </form>
                </div>
            </div>
        </nav>
         <!-- Section-->
          <!-- Header-->
    <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">

            <li class="nav-item">
              <a class="nav-link "  href="admin.php">Cargas y modificaciones</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" aria-current="true" href="consultas.php" >Consultas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="impresiones.php" >Impresiones</a>
            </li>

</ul> </div>
            <div class="card-body">

             <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div id="card" class="card h-10">
                            
                            <div class="card-body p-4">
                                <div class="text-center">
                                  
                                    <h5 class="fw-bolder">Totales del curso</h5>
                                </div>
                            </div>
                          
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Cargar/Modificar</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div id="card" class="card h-10">
                           
                            <div class="card-body p-4">
                                <div class="text-center">
                                   
                                    <h5 class="fw-bolder">Situacion academica</h5>
                                </div>
                            </div>
                           
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Cargar/Modificar</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div id="card" class="card h-10">
                          
                            <div class="card-body p-4">
                                <div class="text-center">
                                         <h5 class="fw-bolder">Notifiacaciones de materias adeudadas por el alumno</h5>
                                </div>
                            </div>
                            
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Cargar/Modificar</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div id="card" class="card h-10">
                          
                            <div class="card-body p-4">
                                <div class="text-center">
                                
                                    <h5 class="fw-bolder">Notificaciones de alumnos por materias adeudadas</h5>
                                   
                                </div>
                            </div>
                           
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Cargar/Modificar</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div id="card" class="card h-10">
                          
                            <div class="card-body p-4">
                                <div class="text-center">
                                    
                                    <h5 class="fw-bolder">Distribucion Aulica</h5>
                                </div>
                            </div>
                          
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="distribucionaulica.php">Cargar/Modificar</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div id="card" class="card h-10">
                          
                            <div class="card-body p-4">
                                <div class="text-center">
                                    
                                    <h5 class="fw-bolder">Distribucion aulica por sexo</h5>
                                </div>
                            </div>
                            
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Cargar/Modificaciones</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div id="card" class="card h-10">
                          
                            <div class="card-body p-4">
                                <div class="text-center">
                            
                                    <h5 class="fw-bolder">Generar archivo para excel</h5>
                                </div>
                            </div>
                        
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Cargar/Modificar</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div id="card" class="card h-10">
                   
                            <div class="card-body p-4">
                                <div class="text-center">
                               
                                    <h5 class="fw-bolder">Detalle de cantidad de alumnos por materia</h5>
                                   
                                </div>
                            </div>
                            
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Cargar/modificar</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
      </div>





















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>