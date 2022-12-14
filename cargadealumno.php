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
            <button class="btn btn-primary" name="logout" type="button" onclick="bypass();">Regresar</button>
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
                        <select class="form-select" id="secundario">
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div> 
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Pais de nacimiento</label>
                    <select class="form-control" name="paisNacimiento" id="paisNacimiento">
                    <option value="Elegir" id="AF">Elegir opci??n</option>
                    <option value="Afganist??n" id="AF">Afganist??n</option>
                    <option value="Albania" id="AL">Albania</option>
                    <option value="Alemania" id="DE">Alemania</option>
                    <option value="Andorra" id="AD">Andorra</option>
                    <option value="Angola" id="AO">Angola</option>
                    <option value="Anguila" id="AI">Anguila</option>
                    <option value="Ant??rtida" id="AQ">Ant??rtida</option>
                    <option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
                    <option value="Antillas holandesas" id="AN">Antillas holandesas</option>
                    <option value="Arabia Saud??" id="SA">Arabia Saud??</option>
                    <option value="Argelia" id="DZ">Argelia</option>
                    <option value="Argentina" id="AR">Argentina</option>
                    <option value="Armenia" id="AM">Armenia</option>
                    <option value="Aruba" id="AW">Aruba</option>
                    <option value="Australia" id="AU">Australia</option>
                    <option value="Austria" id="AT">Austria</option>
                    <option value="Azerbaiy??n" id="AZ">Azerbaiy??n</option>
                    <option value="Bahamas" id="BS">Bahamas</option>
                    <option value="Bahrein" id="BH">Bahrein</option>
                    <option value="Bangladesh" id="BD">Bangladesh</option>
                    <option value="Barbados" id="BB">Barbados</option>
                    <option value="B??lgica" id="BE">B??lgica</option>
                    <option value="Belice" id="BZ">Belice</option>
                    <option value="Ben??n" id="BJ">Ben??n</option>
                    <option value="Bermudas" id="BM">Bermudas</option>
                    <option value="Bhut??n" id="BT">Bhut??n</option>
                    <option value="Bielorrusia" id="BY">Bielorrusia</option>
                    <option value="Birmania" id="MM">Birmania</option>
                    <option value="Bolivia" id="BO">Bolivia</option>
                    <option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
                    <option value="Botsuana" id="BW">Botsuana</option>
                    <option value="Brasil" id="BR">Brasil</option>
                    <option value="Brunei" id="BN">Brunei</option>
                    <option value="Bulgaria" id="BG">Bulgaria</option>
                    <option value="Burkina Faso" id="BF">Burkina Faso</option>
                    <option value="Burundi" id="BI">Burundi</option>
                    <option value="Cabo Verde" id="CV">Cabo Verde</option>
                    <option value="Camboya" id="KH">Camboya</option>
                    <option value="Camer??n" id="CM">Camer??n</option>
                    <option value="Canad??" id="CA">Canad??</option>
                    <option value="Chad" id="TD">Chad</option>
                    <option value="Chile" id="CL">Chile</option>
                    <option value="China" id="CN">China</option>
                    <option value="Chipre" id="CY">Chipre</option>
                    <option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del Vaticano</option>
                    <option value="Colombia" id="CO">Colombia</option>
                    <option value="Comores" id="KM">Comores</option>
                    <option value="Congo" id="CG">Congo</option>
                    <option value="Corea" id="KR">Corea</option>
                    <option value="Corea del Norte" id="KP">Corea del Norte</option>
                    <option value="Costa del Marf??l" id="CI">Costa del Marf??l</option>
                    <option value="Costa Rica" id="CR">Costa Rica</option>
                    <option value="Croacia" id="HR">Croacia</option>
                    <option value="Cuba" id="CU">Cuba</option>
                    <option value="Dinamarca" id="DK">Dinamarca</option>
                    <option value="Djibouri" id="DJ">Djibouri</option>
                    <option value="Dominica" id="DM">Dominica</option>
                    <option value="Ecuador" id="EC">Ecuador</option>
                    <option value="Egipto" id="EG">Egipto</option>
                    <option value="El Salvador" id="SV">El Salvador</option>
                    <option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos</option>
                    <option value="Eritrea" id="ER">Eritrea</option>
                    <option value="Eslovaquia" id="SK">Eslovaquia</option>
                    <option value="Eslovenia" id="SI">Eslovenia</option>
                    <option value="Espa??a" id="ES">Espa??a</option>
                    <option value="Estados Unidos" id="US">Estados Unidos</option>
                    <option value="Estonia" id="EE">Estonia</option>
                    <option value="c" id="ET">Etiop??a</option>
                    <option value="Ex-Rep??blica Yugoslava de Macedonia" id="MK">Ex-Rep??blica Yugoslava de Macedonia</option>
                    <option value="Filipinas" id="PH">Filipinas</option>
                    <option value="Finlandia" id="FI">Finlandia</option>
                    <option value="Francia" id="FR">Francia</option>
                    <option value="Gab??n" id="GA">Gab??n</option>
                    <option value="Gambia" id="GM">Gambia</option>
                    <option value="Georgia" id="GE">Georgia</option>
                    <option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia del Sur y las islas Sandwich del Sur</option>
                    <option value="Ghana" id="GH">Ghana</option>
                    <option value="Gibraltar" id="GI">Gibraltar</option>
                    <option value="Granada" id="GD">Granada</option>
                    <option value="Grecia" id="GR">Grecia</option>
                    <option value="Groenlandia" id="GL">Groenlandia</option>
                    <option value="Guadalupe" id="GP">Guadalupe</option>
                    <option value="Guam" id="GU">Guam</option>
                    <option value="Guatemala" id="GT">Guatemala</option>
                    <option value="Guayana" id="GY">Guayana</option>
                    <option value="Guayana francesa" id="GF">Guayana francesa</option>
                    <option value="Guinea" id="GN">Guinea</option>
                    <option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
                    <option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
                    <option value="Hait??" id="HT">Hait??</option>
                    <option value="Holanda" id="NL">Holanda</option>
                    <option value="Honduras" id="HN">Honduras</option>
                    <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
                    <option value="Hungr??a" id="HU">Hungr??a</option>
                    <option value="India" id="IN">India</option>
                    <option value="Indonesia" id="ID">Indonesia</option>
                    <option value="Irak" id="IQ">Irak</option>
                    <option value="Ir??n" id="IR">Ir??n</option>
                    <option value="Irlanda" id="IE">Irlanda</option>
                    <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
                    <option value="Isla Christmas" id="CX">Isla Christmas</option>
                    <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
                    <option value="Islandia" id="IS">Islandia</option>
                    <option value="Islas Caim??n" id="KY">Islas Caim??n</option>
                    <option value="Islas Cook" id="CK">Islas Cook</option>
                    <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
                    <option value="Islas Faroe" id="FO">Islas Faroe</option>
                    <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
                    <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
                    <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
                    <option value="Islas Marshall" id="MH">Islas Marshall</option>
                    <option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
                    <option value="Islas Palau" id="PW">Islas Palau</option>
                    <option value="Islas Salom??n" d="SB">Islas Salom??n</option>
                    <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
                    <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
                    <option value="Islas V??rgenes EE.UU." id="VI">Islas V??rgenes EE.UU.</option>
                    <option value="Islas V??rgenes Reino Unido" id="VG">Islas V??rgenes Reino Unido</option>
                    <option value="Israel" id="IL">Israel</option>
                    <option value="Italia" id="IT">Italia</option>
                    <option value="Jamaica" id="JM">Jamaica</option>
                    <option value="Jap??n" id="JP">Jap??n</option>
                    <option value="Jordania" id="JO">Jordania</option>
                    <option value="Kazajist??n" id="KZ">Kazajist??n</option>
                    <option value="Kenia" id="KE">Kenia</option>
                    <option value="Kirguizist??n" id="KG">Kirguizist??n</option>
                    <option value="Kiribati" id="KI">Kiribati</option>
                    <option value="Kuwait" id="KW">Kuwait</option>
                    <option value="Laos" id="LA">Laos</option>
                    <option value="Lesoto" id="LS">Lesoto</option>
                    <option value="Letonia" id="LV">Letonia</option>
                    <option value="L??bano" id="LB">L??bano</option>
                    <option value="Liberia" id="LR">Liberia</option>
                    <option value="Libia" id="LY">Libia</option>
                    <option value="Liechtenstein" id="LI">Liechtenstein</option>
                    <option value="Lituania" id="LT">Lituania</option>
                    <option value="Luxemburgo" id="LU">Luxemburgo</option>
                    <option value="Macao R. A. E" id="MO">Macao R. A. E</option>
                    <option value="Madagascar" id="MG">Madagascar</option>
                    <option value="Malasia" id="MY">Malasia</option>
                    <option value="Malawi" id="MW">Malawi</option>
                    <option value="Maldivas" id="MV">Maldivas</option>
                    <option value="Mal??" id="ML">Mal??</option>
                    <option value="Malta" id="MT">Malta</option>
                    <option value="Marruecos" id="MA">Marruecos</option>
                    <option value="Martinica" id="MQ">Martinica</option>
                    <option value="Mauricio" id="MU">Mauricio</option>
                    <option value="Mauritania" id="MR">Mauritania</option>
                    <option value="Mayotte" id="YT">Mayotte</option>
                    <option value="M??xico" id="MX">M??xico</option>
                    <option value="Micronesia" id="FM">Micronesia</option>
                    <option value="Moldavia" id="MD">Moldavia</option>
                    <option value="M??naco" id="MC">M??naco</option>
                    <option value="Mongolia" id="MN">Mongolia</option>
                    <option value="Montserrat" id="MS">Montserrat</option>
                    <option value="Mozambique" id="MZ">Mozambique</option>
                    <option value="Namibia" id="NA">Namibia</option>
                    <option value="Nauru" id="NR">Nauru</option>
                    <option value="Nepal" id="NP">Nepal</option>
                    <option value="Nicaragua" id="NI">Nicaragua</option>
                    <option value="N??ger" id="NE">N??ger</option>
                    <option value="Nigeria" id="NG">Nigeria</option>
                    <option value="Niue" id="NU">Niue</option>
                    <option value="Norfolk" id="NF">Norfolk</option>
                    <option value="Noruega" id="NO">Noruega</option>
                    <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
                    <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
                    <option value="Om??n" id="OM">Om??n</option>
                    <option value="Panam??" id="PA">Panam??</option>
                    <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
                    <option value="Paquist??n" id="PK">Paquist??n</option>
                    <option value="Paraguay" id="PY">Paraguay</option>
                    <option value="Per??" id="PE">Per??</option>
                    <option value="Pitcairn" id="PN">Pitcairn</option>
                    <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
                    <option value="Polonia" id="PL">Polonia</option>
                    <option value="Portugal" id="PT">Portugal</option>
                    <option value="Puerto Rico" id="PR">Puerto Rico</option>
                    <option value="Qatar" id="QA">Qatar</option>
                    <option value="Reino Unido" id="UK">Reino Unido</option>
                    <option value="Rep??blica Centroafricana" id="CF">Rep??blica Centroafricana</option>
                    <option value="Rep??blica Checa" id="CZ">Rep??blica Checa</option>
                    <option value="Rep??blica de Sud??frica" id="ZA">Rep??blica de Sud??frica</option>
                    <option value="Rep??blica Democr??tica del Congo Zaire" id="CD">Rep??blica Democr??tica del Congo Zaire</option>
                    <option value="Rep??blica Dominicana" id="DO">Rep??blica Dominicana</option>
                    <option value="Reuni??n" id="RE">Reuni??n</option>
                    <option value="Ruanda" id="RW">Ruanda</option>
                    <option value="Rumania" id="RO">Rumania</option>
                    <option value="Rusia" id="RU">Rusia</option>
                    <option value="Samoa" id="WS">Samoa</option>
                    <option value="Samoa occidental" id="AS">Samoa occidental</option>
                    <option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
                    <option value="San Marino" id="SM">San Marino</option>
                    <option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
                    <option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas Granadinas</option>
                    <option value="Santa Helena" id="SH">Santa Helena</option>
                    <option value="Santa Luc??a" id="LC">Santa Luc??a</option>
                    <option value="Santo Tom?? y Pr??ncipe" id="ST">Santo Tom?? y Pr??ncipe</option>
                    <option value="Senegal" id="SN">Senegal</option>
                    <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
                    <option value="Sychelles" id="SC">Seychelles</option>
                    <option value="Sierra Leona" id="SL">Sierra Leona</option>
                    <option value="Singapur" id="SG">Singapur</option>
                    <option value="Siria" id="SY">Siria</option>
                    <option value="Somalia" id="SO">Somalia</option>
                    <option value="Sri Lanka" id="LK">Sri Lanka</option>
                    <option value="Suazilandia" id="SZ">Suazilandia</option>
                    <option value="Sud??n" id="SD">Sud??n</option>
                    <option value="Suecia" id="SE">Suecia</option>
                    <option value="Suiza" id="CH">Suiza</option>
                    <option value="Surinam" id="SR">Surinam</option>
                    <option value="Svalbard" id="SJ">Svalbard</option>
                    <option value="Tailandia" id="TH">Tailandia</option>
                    <option value="Taiw??n" id="TW">Taiw??n</option>
                    <option value="Tanzania" id="TZ">Tanzania</option>
                    <option value="Tayikist??n" id="TJ">Tayikist??n</option>
                    <option value="Territorios brit??nicos del oc??ano Indico" id="IO">Territorios brit??nicos del oc??ano Indico</option>
                    <option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
                    <option value="Timor Oriental" id="TP">Timor Oriental</option>
                    <option value="Togo" id="TG">Togo</option>
                    <option value="Tonga" id="TO">Tonga</option>
                    <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
                    <option value="T??nez" id="TN">T??nez</option>
                    <option value="Turkmenist??n" id="TM">Turkmenist??n</option>
                    <option value="Turqu??a" id="TR">Turqu??a</option>
                    <option value="Tuvalu" id="TV">Tuvalu</option>
                    <option value="Ucrania" id="UA">Ucrania</option>
                    <option value="Uganda" id="UG">Uganda</option>
                    <option value="Uruguay" id="UY">Uruguay</option>
                    <option value="Uzbekist??n" id="UZ">Uzbekist??n</option>
                    <option value="Vanuatu" id="VU">Vanuatu</option>
                    <option value="Venezuela" id="VE">Venezuela</option>
                    <option value="Vietnam" id="VN">Vietnam</option>
                    <option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
                    <option value="Yemen" id="YE">Yemen</option>
                    <option value="Zambia" id="ZM">Zambia</option>
                    <option value="Zimbabue" id="ZW">Zimbabue</option>
                    </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Aula</label>
                        <input type="number" class="form-control" id="aula" name="dni" required>
                    </div>
                    <!-- <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Arma asignada</label>
                        <input type="text" class="form-control" id="arma" name="dni" required>
                    </div> -->
                <br>
                <button class="btn btn-primary" type="submit" id="submitA" style="cursor: pointer;border-radius:  10px;">Agregar</button>
                <div style="padding-left:20px">
                <a class="btn btn-secondary" style="cursor: pointer;border-radius:  10px;" href="admin.php">Volver al inicio</a></div>
            </form>
        </div>
        </div><div style="padding-top:  10%;">
        <footer class="py-5 bg-dark ">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        </div>
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
                        
                        swal({
                        title: "Alumno dado de alta",
                        text: "",
                        icon: "success"
                    }).then(function() {
                         $("#cargarAlumno").trigger('reset');
                    });
                    
                    }

                    });
                });
        });
        function bypass(){window.location="admin.php";};
        </script>

</body>
</html>