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
                <img src="assets/imagenes/alto somos la polisia.jpg" width="30" height="30" class="mr-2 mb-1" alt="" id="logo"><b style="color:white; padding-left:10px;">Escuela de policia "juan Vucetich"</b>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                            </ul>
                        </li>
                    </ul>
         <div>
            <form action="modulos/logout.php" method="post"> 
            <button class="btn btn-dark" type="submit" name="logout"><i class="bi bi-arrow-90deg-left"></i>
            </button>
        </form>
           </div>
             <!--!logout -->
                    </form>
                </div>
            </div>
        </nav>
      <!-- Titulo -->
    <h1 class="text-center display-4 pb-5 mb-2 mt-4"  style="padding-top: 5rem;">Carga de nuevo alumno</h1>
    <!-- !Titulo -->
    <div class="container-fluid mt-2 p-0">
        <!-- Body -->
        <div class="container pb-2 bg-white card-shadow">
          <!--formulario de registro -->
            <form id="cargarAlumno">
                <div class="form-row pt-2">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Nombre y Apellido</label>
                    <input type="text" class="form-control" id="nomApe" name="nombre" required>
                  </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="inputMail">Correo Electronico</label>
                      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputTel">Telefono</label>
                        <input type="number" class="form-control" id="telefono" name="telefono" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">DNI</label>
                        <input type="number" class="form-control" id="dni" name="ent_soc" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Codigo Postal</label>
                        <input type="number" class="form-control" id="cod_post" name="dni" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Distrito</label>
                        <input type="text" class="form-control" id="distrito" name="dni" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Domicilio</label>
                        <input type="text" class="form-control" id="domicilio" name="dni" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Destino</label>
                        <input type="text" class="form-control" id="destino" name="dni" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Comisaria del domicilio</label>
                        <input type="text" class="form-control" id="com_destino" name="dni" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Secundario</label>
                        <input type="text" class="form-control" id="secundario" name="dni" required>
                    </div> 
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Pais de nacimiento</label>
                        <input type="text" class="form-control" id="paisNacimiento" name="dni" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Aula</label>
                        <input type="number" class="form-control" id="aula" name="dni" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Arma asignada</label>
                        <input type="text" class="form-control" id="arma" name="dni" required>
                    </div>
                <br>
                <button class="btn btn-primary" type="submit" id="submitA" style="cursor: pointer;">Agregar</button>
                <a class="btn btn-secondary" style="cursor: pointer;" href="admin.php">Volver al inicio</a>
            </form>
        </div>
        </div>
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

        <script type="text/javascript">
             $(document).on('click', '#submitA',function () {

            $('#cargarAlumno').submit(e => {
                    e.preventDefault();
                    //creacion de objeto de almacenamiento de los inputs "postData"
                    const postData = {
                    //guardamos los input dentro de un objeto
                    nomApe: $("#nomApe").val(),
                    email: $("#email").val(),
                    telefono: $("#telefono").val(),
                    dni: $("#dni").val(),
                    cod_post: $("#cod_post").val(),
                    distrito: $("#distrito").val(),
                    domicilio: $("#domicilio").val(),
                    destino: $("#destino").val(),
                    com_destino: $("#com_destino").val(),
                    secundario: $("#secundario").val(),
                    paisNacimiento: $("#paisNacimiento").val(),
                    aula: $("#aula").val(),
                    arma: $("#arma").val(),
                    tipo: "cargarAlumno"
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
                        alert("datos cargados");
                        $("#cargarAlumno").trigger('reset');
                    }

                    });
                });
        });
        </script>

</body>
</html>