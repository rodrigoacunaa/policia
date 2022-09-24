<?php 
    include('db.php');

    $numaula7 = 7;
    $numaula8 = 8;
    $numaula9 = 9;
    $numaula10 = 10;
    $numaula11 = 11;
    $numaula12 = 12;

    $datosaula7 = $_POST['aula7'];
    $datosaula8 = $_POST['aula8'];
    $datosaula9 = $_POST['aula9'];
    $datosaula10 = $_POST['aula10'];
    $datosaula11 = $_POST['aula11'];
    $datosaula12 = $_POST['aula12'];
    
    $sql2 = "UPDATE `aulas` SET `alumnos`= '".$datosaula7."' WHERE aula = $numaula7";
    $sql3 = "UPDATE `aulas` SET `alumnos`= '".$datosaula8."' WHERE aula = $numaula8";
    $sql4 = "UPDATE `aulas` SET `alumnos`= '".$datosaula9."' WHERE aula = $numaula9";
    $sql5 = "UPDATE `aulas` SET `alumnos`= '".$datosaula10."'WHERE aula = $numaula10";
    $sql6 = "UPDATE `aulas` SET `alumnos`= '".$datosaula11."' WHERE aula = $numaula11";
    $sql7 = "UPDATE `aulas` SET `alumnos`= '".$datosaula12."' WHERE aula = $numaula12";
    
    $query = mysqli_query($connection,$sql2,);
    $query = mysqli_query($connection,$sql3,);
    $query = mysqli_query($connection,$sql4,);
    $query = mysqli_query($connection,$sql5,);
    $query = mysqli_query($connection,$sql6,);
    $query = mysqli_query($connection,$sql7,);

?>
<script type="text/javascript">
    function volver() {
        window.location = "../distribucionaulica.php";
    };
    volver();
</script>