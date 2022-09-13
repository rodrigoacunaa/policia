<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<title>Alumnos dados de baja</title>
</head>
<body>
	<div class="p-5 text-center bg-light">
    <h1 class="mb-3">Consulta de dados de baja</h1>
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

</body>
</html>