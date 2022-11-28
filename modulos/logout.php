<?php
function logout(){
        $submitBtn = $_POST['logout'];

        if(isset($submitBtn)){
            //continuamos la sesion
        session_start();

        //destruimos la sesion
        session_destroy();

        header("location:../index.php");     
        } 
    }

    logout();
?>