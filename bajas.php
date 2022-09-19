<?php
include("modulos/loginMod.php");
include("modulos/funciones.php");
$email = $_SESSION['email'];
destroyAdmin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga de nuevo alumno</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/imagenes/alto somos la polisia2.jpg" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
 <!-- Navigation-->
 <nav class="navbar navbar-expand-lg" style="background-color: rgb(0, 0, 139);" >
            <div class="container px-4 px-lg-5">
                <img src="assets/imagenes/alto somos la polisia.jpg" width="40" height="40" class="mr-2 mb-1" alt="" id="logo"><h5 style="color:white; padding-left:20px;padding-top:auto">Escuela de Policia "Juan Vucetich"</h5>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                            </ul>
                        </li>
                    </ul>
         <div>
            <button class="btn btn-primary" name="logout" type="submit" onclick="bypass();">Regresar</button>
           </div>
             <!--!logout -->
                    </form>
                </div>
            </div>
        </nav>
      <!-- Titulo -->
          <div class="container text-center mt-4 vh-100" style="margin_left: 50px;">
                            <h1 class="display-4 pb-5 mb-2 mt-4"  style="padding-top: 5rem;">Baja del alumno</h1>
                             <form class="row" id="form">
                            <div class="col-auto ms-auto">
                                <label for="staticEmail2" class="visually-hidden">Email</label>
                                <select class="form-select" id="form-select" aria-label="Default select example">
                                <option selected>Eliga un alumno</option>
                                <?php
                                    $sql = "SELECT * FROM `alumnos` WHERE `estado` = 0";
                                    $sqlEX = mysqli_query($connection, $sql);
                                    $row = mysqli_fetch_array($sqlEX);
                                    foreach($sqlEX as $row){
                                        $nombreAlum = $row['nomApe'];

                                        echo '<option id="nomApe" value="'.$nombreAlum.'"> '.$nombreAlum.' </option>'; 

                                    }
                                ?>
                                </select>
                            </div>
                            <div class="col-auto">
                                <label for="inputPassword2" class="visually-hidden">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="col-auto">
                                <label for="inputPassword2" class="visually-hidden"></label>
                                <select class="form-select" id="form-select" aria-label="Default select example" value="Motivo" placeholder="Motivo" select>
                                    <option value="" >Motivo de la Baja</option>
                                    <option value="">..</option>
                                    <option value="">..</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <input class="form-control" type="date" id="fechaBaja">
                            </div>
                            <div class="col-auto me-auto">
                                <button type="submit" id="submitConfir" class="btn btn-primary mb-3">Confirmar</button>
                            </div>
                            </form>
                    </div> 


        <footer class="py-5 bg-dark sticky-footer">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script type="text/javascript">
             $(document).on('click', '#submitConfir',function () {

            $('#form').submit(e => {
                    e.preventDefault();
                    //creacion de objeto de almacenamiento de los inputs "postData"
                    const postData = {
                    //guardamos los input dentro de un objeto
                    nomApe: $("#nomApe").val(),
                    password: $("#password").val(),
                    fechaBaja: $("#fechaBaja").val(),
                    tipo: "bajaAlumno"
                    };
                    //validacion ternaria de redireccion segun valor de la variable booleana "edit"
                    const url = "modulos/consultas.php";
                    //mostramos por pantalla el objeto y la direccion donde sera enviada para ser procesado
                    console.log(postData, url);
                    //metodo post por jquery parametros = (direccion url del archivo php, el objeto que guarda los datos a procesar, una funcion de respuesta al
                    //procesamiento de dichos datos)
                    $.post(url, postData, (response) => {

                        const rta = JSON.parse(response);
                        console.log(rta);
                        if(rta == 1){
                        
                        swal({
                        title: "Alumno dado de baja",
                        text: "Lo podrá encontrar en alumnos dados de baja",
                        icon: "success"
                    }).then(function() {
                         window.location="bajas.php";
                    });
                    
                    }
                    

                    });
                });
        });
        function bypass(){window.location="admin.php";};
        </script>
</body>

</html>