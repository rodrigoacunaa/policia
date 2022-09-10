<?php
//funcion de seguridad url
function destroyAdmin() {
        if (!isset($_SESSION['email'])){
            session_destroy();
            header("location:login.php");
        }
    }
 ?>