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
    <style type="text/css">
        #aula .dni{
            width: 57px;
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
         <div>
            <button class="btn btn-primary" name="logout" type="submit" onclick="bypass();">Regresar</button>
           </div>
             <!--!logout -->
                </div>
            </div>
    </nav>
        <div class="container-fluid mt-2 " style="padding-left:30%;">

     <table class="table caption-top " style="width: 500px;">
    
  <thead style="text-align:center"> 
    <tr>      
    <th scope="col" >Aulas</th>
    <th scope="col">Cantidad de Alumnos</th>
    </tr>
  </thead>
  <tbody style="text-align:center">
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
    </tr>
  </tbody>
    </table>
    </div>
  

    


        <script type="text/javascript">
                    function bypass(){window.location="consulta.php";};

                $('.editbtn').on('click', function(){
                    $tr=$(this).closest('tr');
                    var datos = $tr.children("td").map(function(){
                        return $(this).text();
                    });
                    
                    $('#dni').val(datos[0]);
                    $('#aulan').val(datos[1]);      
                });

        </script>
        <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                    <button type="button" class="close" data-dismiss="modal" arial-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Formulario -->
                    <form action="modulos/modificaraula.php" method="POST">
                        <div class="form-group">
                            <label for="">DNI CORRESPONDIENTE</label>
                            <input class="form-control" name="dni1" id="dni">
                            <label name="aula" id="aula"></label>
                        </div>
                        <div class="form-group">
                        <label >AULA NUEVA</label>
                        <input class="form-control" name="aulan" id="aulan">
                        </div>
                        <div class="modal-footer pt-3" >
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>        
        </div>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        </body>