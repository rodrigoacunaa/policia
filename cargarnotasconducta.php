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
        #notas{
            width: 50px;
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
      <th scope="col">Nombre y Apellido</th>
      <th scope="col">Calificacion</th>
        <th scope="col"><a href="..">Sunir</a> </th>
    </tr>
  </thead>
  
        <?php

	$sql = "SELECT * FROM `alumnos`";

	$query = mysqli_query($connection, $sql);

	$row = mysqli_fetch_array($query);
  

	foreach($query as $row){
    $dni=$row['dni'];

    echo "<tr>";
    echo "<td scope='row'>$dni</td>";

		echo '<td scope="row">'. $row['nomApe'].'</td>';
        echo "<td> <input class='form-control' id='notas'> </td></a>";
    echo '</tr>';
	}
 ?>
        <script type="text/javascript">
                    function bypass(){window.location="admin.php";};
        </script>
        </body>