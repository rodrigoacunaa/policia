<?php
include("db.php");
session_start();

$tipo = $_POST['tipo'];

    switch ($tipo) {
        case 'cargarAlumno':
            $nomApe = $_POST['nomApe'];
            $email = $_POST['email'];
            $dni = $_POST['dni'];
            $telefono = $_POST['telefono'];
            $cod_post = $_POST['cod_post'];
            $distrito = $_POST['distrito'];
            $domicilio = $_POST['domicilio'];
            $destino = $_POST['destino'];
            $com_destino = $_POST['com_destino'];
            $secundario = $_POST['secundario'];
            $paisNacimiento = $_POST['paisNacimiento'];
            $aula = $_POST['aula'];
            $arma = $_POST['arma'];

            $sql = "INSERT INTO `alumnos`(`dni`, `nomApe`, `email`, `telefono`, `cdPostal`, `distrito`, `domicilio`, `destino`, `comisariaD`, `secundario`, `paisNacimiento`, `aula`, `armaAsig`) VALUES ('".$dni."','".$nomApe."','".$email."','".$telefono."','".$cod_post."','".$distrito."','".$domicilio."','".$destino."','".$com_destino."','".$secundario."','".$paisNacimiento."','".$aula."','".$arma."')";

                $sqlEX = mysqli_query($connection, $sql);
                

                if($sqlEX){
                        $json = "1";
                       $jsonStr = json_encode($json);
                       echo $jsonStr;
                    }
            
            break;
        
        case 'bajaAlumno':
            $nomApe = $_POST['nomApe'];
            $passwordAdmin = $_POST['password'];
            $fechaBaja = $_POST['fechaBaja'];
            $email = $_SESSION['email'];
            //consultamos sus datos en nuestra bd
            $query = "SELECT * FROM `user` WHERE `email` = '$email'";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);

            if($email == $row['email']){
                //si coinciden iniciamos la sesion y redirigimos
                if($passwordAdmin == $row['password']){
                    $busqueda = "SELECT * FROM `alumnos` WHERE `nomApe` = '".$nomApe."'";
                    $result = mysqli_query($connection, $busqueda);
                    $fila = mysqli_fetch_array($result);
                    $dni = $fila['dni'];

                    $sql = "UPDATE `alumnos` SET `estado` = 1 , `fechaB` = '".$fechaBaja."' WHERE `dni` = '".$dni."' ";
                    $ejecutar = mysqli_query($connection, $sql);

                    if($ejecutar){
                         $json = "1";
                       $jsonStr = json_encode($json);
                       echo $jsonStr;
                    }

                
                    
                }//si la contaseña es incorrecta notificamos
                else{echo '<script> swal({
                        title: "Contraseña incorrecta",
                        text: "",
                        icon: "error"
                    }).then(function() {
                        window.location = "../bajas.php";
                    }); </script>';}
            

            }
            break;

        case 'formador':
            
            break;
        
        case 'area':
            
            break;

        case 'tutorial':
            
            break;
        
        default:
            # code...
            break;
    }
?>