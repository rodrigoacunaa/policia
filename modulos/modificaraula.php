<?php 
    include('db.php');

    $dni = $_POST['dni1'];
    $aulanueva = $_POST['aulan'];


   $sql = mysqli_query($connection,"UPDATE `alumnos` SET `aula`='$aulanueva' WHERE dni = '$dni'");

   header("Location:../cargarCambiosdeaula.php");
    
    
    
?>