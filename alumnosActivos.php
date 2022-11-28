<?php
include("modulos/loginMod.php");
include("modulos/funciones.php");
$email = $_SESSION['email'];
destroyAdmin();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>



    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
  


    <title>Alumnos activos</title>
  </head>
  <body>


  <style>
        img {
            height: 30px;
            width: 30px;
        };
    </style>

        
    <div class="p-5 text-center bg-light">
    <h1 class="mb-3">Totalidad de alumnos de la academia (activos)</h1>
  </div>

 <div class="card">
    <div class="card-body">
     <table id="table_id" width="100%" cellspacing="0" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Dni </th>
                    <th scope="col">Nombre Apellido </th>
                    <th scope="col">Aula</th>
                    <th scope="col">.</th>
                </tr>
            </thead>
            <tbody>
            <?php
                
                $sql = "SELECT * FROM `alumnos` WHERE `estado`!= 1";
            
                $query = mysqli_query($connection, $sql);
            
                $row = mysqli_fetch_array($query);
            
            
                foreach($query as $row){
                $dni=$row['dni'];
                $id = $row['id'];
            
                echo "<tr>";
            
                echo "<th scope='row'>$dni</th>"; //1
            
                echo '<td >'. $row['nomApe'].'</td>'; //2
            
                echo '<td>'. $row['aula'].'</td>'; //12
            
                echo "<td> <button data-dni=".$dni." id='verMas'> 🕵️ </button> </td>"; //16
            
                echo '</tr>';
                }
            ?>
            </tbody>
            </table>
            </div>
            </div> 
    

<!--Instanciamos jquery y datatables cdn -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

<script type="text/javascript">
            $(document).ready(function(){
                $('#table_id').DataTable({
                    responsive:true
                });
            });
        </script>

        <script type="text/javascript" src="js/script.js"></script>


  </body>
</html>