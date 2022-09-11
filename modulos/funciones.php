<?php
//funcion de seguridad url
function destroyAdmin() {
        $email = $_SESSION['email'];
        if (isset($email)){
            
        }else{
            session_destroy();
            header("location:login.php");
        }
    }
 ?>