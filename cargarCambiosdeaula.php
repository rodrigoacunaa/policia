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
        #aula{
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
        <div class="container-fluid mt-2 p-4">
     <table class="table caption-top">
  <thead>
    <tr>      
    <th scope="col">DNI</th>
    <th scope="col">Aula</th>
    <th scope="col">Nombre y Apellido</th>
    <th scope="col">Editar </th>
    </tr>
  </thead>
  
        <?php

	$sql = "SELECT * FROM `alumnos`";

	$query = mysqli_query($connection, $sql);

	$row = mysqli_fetch_array($query);
  

	foreach($query as $row){
    $dni=$row['dni'];

    echo "<tr>";
    echo "<td scope='row' id='dni'>$dni</td>";
    echo "<td> <input class='form-control' id='aula' value=".$row['aula']." > </td></a>";
	echo "<td scope='row' id='nombreyapellido'>". $row['nomApe']."</td>";
    echo "<td scope='row'> <button type='button' class='btn btn-primary editbtn' data-toggle='modal' data-target='#editar'>
    Editar</button></td>";
    echo '</tr>';
	}
 ?>

<!-- Button trigger modal -->


<!-- Modal -->
<!-- <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <input class='form-control' id="aula" name="aula" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

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
                    <form action="modificaraula.php" method="POST">
                        <div class="form-group">
                            <label for="">Aula Nueva</label>
                            <input class="form-control" name="aula" id="aula">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>        
</div>


        <script type="text/javascript">
                    function bypass(){window.location="admin.php";};

                $('.editbtn').on('click', function(){
                    $tr=$(this).closest('tr');
                    var datos = $tr.children("td").map(function(){
                        return $(this).text();
                    });
                    $('#aula').val(datos[1]);
                });

        </script>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        </body>