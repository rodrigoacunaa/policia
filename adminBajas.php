<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<title>Alumnos dados de baja</title>
</head>
<body>
<nav class="navbar navbar-expand-lg "style="background-color: rgb(0, 0, 139);" >
  <div class="container px-4 px-lg-5">
      <img src="assets/imagenes/alto somos la polisia.jpg" alt="" width="40" height="40" class="mr-2 mb-1" alt="" id="logo"><span>
      <h5 style="color:white; padding-left:20px;padding-top:auto">Escuela de Policia "Juan Vucetich"</h5></span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    
   <div>
            <button class="btn btn-primary" name="logout" type="submit" onclick="bypass();">Regresar</button>
           </div>   
  </div>
</nav>
    <!-- Navigation-->
 <!--         
      
 <nav class="navbar navbar-expand-lg" style="background-color: rgb(0, 0, 139);" >
            <div class="container px-4 px-lg-5">
                <img src="assets/imagenes/alto somos la polisia.jpg" width="40" height="40" class="mr-2 mb-1" alt="" id="logo"><h5 style="color:white; padding-left:20px;padding-top:auto">Escuela de Policia "Juan Vucetich"</h5>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                            </ul>
                        </li>
                    </ul>
          
           </div> -->
	<div class="p-5 text-center bg-light">
    <h1 class="mb-3">Consulta de alumnos dados de baja</h1>
  </div>

	<div class="row">      
  <div class="container mt-5">
  <table id="tablaContacto" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre y Apellido</th>
                            <th>Dni</th>
                            <th>Telefono</th>
                            <th>Distrito ex-perteneciente</th>      
                        </tr>
                    </thead>
                    <tbody>
                    
                    <?php
                    include("modulos/db.php");
                    $sql = "SELECT * FROM `alumnos` WHERE `estado` = 1";
                    $sqlEX = mysqli_query($connection, $sql);
                    $row = mysqli_fetch_array($sqlEX);

                    foreach($sqlEX as $row){
                    echo '
                    <tr>
                    <td>'.$row["nomApe"].'</td>
                    <td>'.$row["dni"].'</td>
                    <td>'.$row["telefono"].'</td>
                    <td>'.$row["distrito"].'</td>       
                    </tr>
                    ';
                    }
                    ?>

                        
                              </tbody>
    
</table>
</div>
</div>

<!--datatables scripts -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/r-2.2.9/sb-1.3.2/datatables.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script>
            $(document).ready(function () {
                $('#tablaContacto').DataTable();
            });

        </script>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

     <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>

        <script type="text/javascript">
                function bypass() {
                    window.location="admin.php";
                }
            </script>
</body>
</html>