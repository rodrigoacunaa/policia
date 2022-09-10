<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!--swal cdn -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <title>LOGIN</title>
  </head>
  <body>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php 
include("db.php");
session_start();
error_reporting(0);


$submitBtn = $_POST['submit'];
if (isset($submitBtn)) {
	//tomamos las variables ingresadas por el usuario
		$email = $_POST['email'];
		$password = $_POST['password'];
  //consultamos sus datos en nuestra bd
    	$query = "SELECT * FROM `user` WHERE `email` = '$email'";
    	$result = mysqli_query($connection, $query);
    	$row = mysqli_fetch_assoc($result);

    	if($email == $row['email']){
    		//si coinciden iniciamos la sesion y redirigimos
    		if($password == $row['password']){
                $_SESSION['dni'] = $row['dni'];
                $_SESSION['email'] = $row['email'];
                header("location: ../admin.php");
    		}
        //si la contaseña es incorrecta notificamos
    		else{echo '<script> swal({
                    title: "Contraseña incorrecta",
                    text: "",
                    icon: "error"
                }).then(function() {
                    window.location = "../login.php";
                }); </script>';}

    	}
      //si el email es incorrecto notificamos
    	else {echo '<script> swal({
                    title: "Email incorrecto",
                    text: "",
                    icon: "error"
                }).then(function() {
                    window.location = "../login.php";
                }); </script>';}
   
    

    }



 ?>