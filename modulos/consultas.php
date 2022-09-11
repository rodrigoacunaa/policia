<?php
include("db.php");

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
        
        case 'curso':
            # code...
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