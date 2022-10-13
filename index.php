<?php
include("modulos/loginMod.php");
include("modulos/funciones.php");
$email = $_SESSION['email'];
destroyAdmin();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>



    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
    <title>Hel</title>
  </head>
  <body>


  <style>
        img {
            height: 30px;
            width: 30px;
        };
    </style>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
    </nav>
    
  <div class="ms-3 me-3">
     <table class="table">
            <thead>
                <tr>
                    <th scope="col">Dni </th>
                    <th scope="col">Nombre Apellido </th>
                    <th scope="col">Email </th>
                    <th scope="col">Telefono </th>
                    <th scope="col">cdPostal </th>
                    <th scope="col">Distrito</th>
                    <th scope="col">Domicilio</th>
                    <th scope="col">Destino</th>
                    <th scope="col">ComisariaD</th>
                    <th scope="col">Secundario</th>
                    <th scope="col">Pais Nacimiento </th>
                    <th scope="col">Aula</th>
                    <th scope="col">ArmaAsig</th>
                    <th scope="col">Estado</th>  
                    <th scope="col">Inasistencias</th>
                    <th scope="col">.</th>
                </tr>
            </thead>
            <tbody>
            <?php
                
                $sql = "SELECT * FROM `alumnos`";
            
                $query = mysqli_query($connection, $sql);
            
                $row = mysqli_fetch_array($query);
            
            
                foreach($query as $row){
                $dni=$row['dni'];
            
                echo "<tr>";
            
                echo "<th scope='row'>$dni</th>"; //1
            
                echo '<td >'. $row['nomApe'].'</td>'; //2
            
                echo '<td >'. $row['email'].'</td>'; //3
            
                echo '<td >'. $row['telefono'].'</td>'; //4
            
                echo '<td >'. $row['cdPostal'].'</td>'; //5
            
                echo '<td >'. $row['distrito'].'</td>'; //6
            
                echo '<td >'. $row['domicilio'].'</td>'; //7
            
                echo '<td >'. $row['destino'].'</td>'; //8
            
                echo '<td >'. $row['comisariaD'].'</td>';  //9
            
                echo '<td >'. $row['secundario'].'</td>'; //10
            
                echo '<td >'. $row['paisNacimiento'].'</td>'; //11
            
                echo '<td>'. $row['aula'].'</td>'; //12
            
                echo '<td >'. $row['armaAsig'].'</td>'; //13
            
                echo '<td >'. $row['estado'].' </td>'; //14
                
                echo '<td style="width: 10px;">'. $row['inasistencias'].' </td>'; //15
            
                echo "<td> <a data-bs-toggle='modal' data-bs-target='#editar'><img src='assets/imagenes/lapiz.png' alt='editar'/></td></a>"; //16
            
                echo '</tr>';
                }
            ?>
            </tbody>
            </table>
    </div>

  </body>
  <!--Metodo Jquery para dar de alta un alumno--->

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
        </script>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" ata-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
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
                    <option value="Elegir" id="AF">Elegir opción</option>
                    <option value="Afganistán" id="AF">Afganistán</option>
                    <option value="Albania" id="AL">Albania</option>
                    <option value="Alemania" id="DE">Alemania</option>
                    <option value="Andorra" id="AD">Andorra</option>
                    <option value="Angola" id="AO">Angola</option>
                    <option value="Anguila" id="AI">Anguila</option>
                    <option value="Antártida" id="AQ">Antártida</option>
                    <option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
                    <option value="Antillas holandesas" id="AN">Antillas holandesas</option>
                    <option value="Arabia Saudí" id="SA">Arabia Saudí</option>
                    <option value="Argelia" id="DZ">Argelia</option>
                    <option value="Argentina" id="AR">Argentina</option>
                    <option value="Armenia" id="AM">Armenia</option>
                    <option value="Aruba" id="AW">Aruba</option>
                    <option value="Australia" id="AU">Australia</option>
                    <option value="Austria" id="AT">Austria</option>
                    <option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
                    <option value="Bahamas" id="BS">Bahamas</option>
                    <option value="Bahrein" id="BH">Bahrein</option>
                    <option value="Bangladesh" id="BD">Bangladesh</option>
                    <option value="Barbados" id="BB">Barbados</option>
                    <option value="Bélgica" id="BE">Bélgica</option>
                    <option value="Belice" id="BZ">Belice</option>
                    <option value="Benín" id="BJ">Benín</option>
                    <option value="Bermudas" id="BM">Bermudas</option>
                    <option value="Bhután" id="BT">Bhután</option>
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
                    <option value="Camerún" id="CM">Camerún</option>
                    <option value="Canadá" id="CA">Canadá</option>
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
                    <option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
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
                    <option value="España" id="ES">España</option>
                    <option value="Estados Unidos" id="US">Estados Unidos</option>
                    <option value="Estonia" id="EE">Estonia</option>
                    <option value="c" id="ET">Etiopía</option>
                    <option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava de Macedonia</option>
                    <option value="Filipinas" id="PH">Filipinas</option>
                    <option value="Finlandia" id="FI">Finlandia</option>
                    <option value="Francia" id="FR">Francia</option>
                    <option value="Gabón" id="GA">Gabón</option>
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
                    <option value="Haití" id="HT">Haití</option>
                    <option value="Holanda" id="NL">Holanda</option>
                    <option value="Honduras" id="HN">Honduras</option>
                    <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
                    <option value="Hungría" id="HU">Hungría</option>
                    <option value="India" id="IN">India</option>
                    <option value="Indonesia" id="ID">Indonesia</option>
                    <option value="Irak" id="IQ">Irak</option>
                    <option value="Irán" id="IR">Irán</option>
                    <option value="Irlanda" id="IE">Irlanda</option>
                    <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
                    <option value="Isla Christmas" id="CX">Isla Christmas</option>
                    <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
                    <option value="Islandia" id="IS">Islandia</option>
                    <option value="Islas Caimán" id="KY">Islas Caimán</option>
                    <option value="Islas Cook" id="CK">Islas Cook</option>
                    <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
                    <option value="Islas Faroe" id="FO">Islas Faroe</option>
                    <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
                    <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
                    <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
                    <option value="Islas Marshall" id="MH">Islas Marshall</option>
                    <option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
                    <option value="Islas Palau" id="PW">Islas Palau</option>
                    <option value="Islas Salomón" d="SB">Islas Salomón</option>
                    <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
                    <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
                    <option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
                    <option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido</option>
                    <option value="Israel" id="IL">Israel</option>
                    <option value="Italia" id="IT">Italia</option>
                    <option value="Jamaica" id="JM">Jamaica</option>
                    <option value="Japón" id="JP">Japón</option>
                    <option value="Jordania" id="JO">Jordania</option>
                    <option value="Kazajistán" id="KZ">Kazajistán</option>
                    <option value="Kenia" id="KE">Kenia</option>
                    <option value="Kirguizistán" id="KG">Kirguizistán</option>
                    <option value="Kiribati" id="KI">Kiribati</option>
                    <option value="Kuwait" id="KW">Kuwait</option>
                    <option value="Laos" id="LA">Laos</option>
                    <option value="Lesoto" id="LS">Lesoto</option>
                    <option value="Letonia" id="LV">Letonia</option>
                    <option value="Líbano" id="LB">Líbano</option>
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
                    <option value="Malí" id="ML">Malí</option>
                    <option value="Malta" id="MT">Malta</option>
                    <option value="Marruecos" id="MA">Marruecos</option>
                    <option value="Martinica" id="MQ">Martinica</option>
                    <option value="Mauricio" id="MU">Mauricio</option>
                    <option value="Mauritania" id="MR">Mauritania</option>
                    <option value="Mayotte" id="YT">Mayotte</option>
                    <option value="México" id="MX">México</option>
                    <option value="Micronesia" id="FM">Micronesia</option>
                    <option value="Moldavia" id="MD">Moldavia</option>
                    <option value="Mónaco" id="MC">Mónaco</option>
                    <option value="Mongolia" id="MN">Mongolia</option>
                    <option value="Montserrat" id="MS">Montserrat</option>
                    <option value="Mozambique" id="MZ">Mozambique</option>
                    <option value="Namibia" id="NA">Namibia</option>
                    <option value="Nauru" id="NR">Nauru</option>
                    <option value="Nepal" id="NP">Nepal</option>
                    <option value="Nicaragua" id="NI">Nicaragua</option>
                    <option value="Níger" id="NE">Níger</option>
                    <option value="Nigeria" id="NG">Nigeria</option>
                    <option value="Niue" id="NU">Niue</option>
                    <option value="Norfolk" id="NF">Norfolk</option>
                    <option value="Noruega" id="NO">Noruega</option>
                    <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
                    <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
                    <option value="Omán" id="OM">Omán</option>
                    <option value="Panamá" id="PA">Panamá</option>
                    <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
                    <option value="Paquistán" id="PK">Paquistán</option>
                    <option value="Paraguay" id="PY">Paraguay</option>
                    <option value="Perú" id="PE">Perú</option>
                    <option value="Pitcairn" id="PN">Pitcairn</option>
                    <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
                    <option value="Polonia" id="PL">Polonia</option>
                    <option value="Portugal" id="PT">Portugal</option>
                    <option value="Puerto Rico" id="PR">Puerto Rico</option>
                    <option value="Qatar" id="QA">Qatar</option>
                    <option value="Reino Unido" id="UK">Reino Unido</option>
                    <option value="República Centroafricana" id="CF">República Centroafricana</option>
                    <option value="República Checa" id="CZ">República Checa</option>
                    <option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
                    <option value="República Democrática del Congo Zaire" id="CD">República Democrática del Congo Zaire</option>
                    <option value="República Dominicana" id="DO">República Dominicana</option>
                    <option value="Reunión" id="RE">Reunión</option>
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
                    <option value="Santa Lucía" id="LC">Santa Lucía</option>
                    <option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
                    <option value="Senegal" id="SN">Senegal</option>
                    <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
                    <option value="Sychelles" id="SC">Seychelles</option>
                    <option value="Sierra Leona" id="SL">Sierra Leona</option>
                    <option value="Singapur" id="SG">Singapur</option>
                    <option value="Siria" id="SY">Siria</option>
                    <option value="Somalia" id="SO">Somalia</option>
                    <option value="Sri Lanka" id="LK">Sri Lanka</option>
                    <option value="Suazilandia" id="SZ">Suazilandia</option>
                    <option value="Sudán" id="SD">Sudán</option>
                    <option value="Suecia" id="SE">Suecia</option>
                    <option value="Suiza" id="CH">Suiza</option>
                    <option value="Surinam" id="SR">Surinam</option>
                    <option value="Svalbard" id="SJ">Svalbard</option>
                    <option value="Tailandia" id="TH">Tailandia</option>
                    <option value="Taiwán" id="TW">Taiwán</option>
                    <option value="Tanzania" id="TZ">Tanzania</option>
                    <option value="Tayikistán" id="TJ">Tayikistán</option>
                    <option value="Territorios británicos del océano Indico" id="IO">Territorios británicos del océano Indico</option>
                    <option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
                    <option value="Timor Oriental" id="TP">Timor Oriental</option>
                    <option value="Togo" id="TG">Togo</option>
                    <option value="Tonga" id="TO">Tonga</option>
                    <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
                    <option value="Túnez" id="TN">Túnez</option>
                    <option value="Turkmenistán" id="TM">Turkmenistán</option>
                    <option value="Turquía" id="TR">Turquía</option>
                    <option value="Tuvalu" id="TV">Tuvalu</option>
                    <option value="Ucrania" id="UA">Ucrania</option>
                    <option value="Uganda" id="UG">Uganda</option>
                    <option value="Uruguay" id="UY">Uruguay</option>
                    <option value="Uzbekistán" id="UZ">Uzbekistán</option>
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
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Arma asignada</label>
                        <input type="text" class="form-control" id="arma" name="dni" required>
                    </div>
                <br>
                <button class="btn btn-primary" type="submit" id="submitA" style="cursor: pointer;border-radius:  10px;">Agregar</button>
                <div style="padding-left:20px">
                <a class="btn btn-secondary" style="cursor: pointer;border-radius:  10px;" href="admin.php">Volver al inicio</a></div>
            </form>
 </div>
    </div>
  </div>
</div>
 

  

<!-- Modal Editar-->
<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
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
                    <option value="Elegir" id="AF">Elegir opción</option>
                    <option value="Afganistán" id="AF">Afganistán</option>
                    <option value="Albania" id="AL">Albania</option>
                    <option value="Alemania" id="DE">Alemania</option>
                    <option value="Andorra" id="AD">Andorra</option>
                    <option value="Angola" id="AO">Angola</option>
                    <option value="Anguila" id="AI">Anguila</option>
                    <option value="Antártida" id="AQ">Antártida</option>
                    <option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
                    <option value="Antillas holandesas" id="AN">Antillas holandesas</option>
                    <option value="Arabia Saudí" id="SA">Arabia Saudí</option>
                    <option value="Argelia" id="DZ">Argelia</option>
                    <option value="Argentina" id="AR">Argentina</option>
                    <option value="Armenia" id="AM">Armenia</option>
                    <option value="Aruba" id="AW">Aruba</option>
                    <option value="Australia" id="AU">Australia</option>
                    <option value="Austria" id="AT">Austria</option>
                    <option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
                    <option value="Bahamas" id="BS">Bahamas</option>
                    <option value="Bahrein" id="BH">Bahrein</option>
                    <option value="Bangladesh" id="BD">Bangladesh</option>
                    <option value="Barbados" id="BB">Barbados</option>
                    <option value="Bélgica" id="BE">Bélgica</option>
                    <option value="Belice" id="BZ">Belice</option>
                    <option value="Benín" id="BJ">Benín</option>
                    <option value="Bermudas" id="BM">Bermudas</option>
                    <option value="Bhután" id="BT">Bhután</option>
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
                    <option value="Camerún" id="CM">Camerún</option>
                    <option value="Canadá" id="CA">Canadá</option>
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
                    <option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
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
                    <option value="España" id="ES">España</option>
                    <option value="Estados Unidos" id="US">Estados Unidos</option>
                    <option value="Estonia" id="EE">Estonia</option>
                    <option value="c" id="ET">Etiopía</option>
                    <option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava de Macedonia</option>
                    <option value="Filipinas" id="PH">Filipinas</option>
                    <option value="Finlandia" id="FI">Finlandia</option>
                    <option value="Francia" id="FR">Francia</option>
                    <option value="Gabón" id="GA">Gabón</option>
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
                    <option value="Haití" id="HT">Haití</option>
                    <option value="Holanda" id="NL">Holanda</option>
                    <option value="Honduras" id="HN">Honduras</option>
                    <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
                    <option value="Hungría" id="HU">Hungría</option>
                    <option value="India" id="IN">India</option>
                    <option value="Indonesia" id="ID">Indonesia</option>
                    <option value="Irak" id="IQ">Irak</option>
                    <option value="Irán" id="IR">Irán</option>
                    <option value="Irlanda" id="IE">Irlanda</option>
                    <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
                    <option value="Isla Christmas" id="CX">Isla Christmas</option>
                    <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
                    <option value="Islandia" id="IS">Islandia</option>
                    <option value="Islas Caimán" id="KY">Islas Caimán</option>
                    <option value="Islas Cook" id="CK">Islas Cook</option>
                    <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
                    <option value="Islas Faroe" id="FO">Islas Faroe</option>
                    <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
                    <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
                    <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
                    <option value="Islas Marshall" id="MH">Islas Marshall</option>
                    <option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
                    <option value="Islas Palau" id="PW">Islas Palau</option>
                    <option value="Islas Salomón" d="SB">Islas Salomón</option>
                    <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
                    <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
                    <option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
                    <option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido</option>
                    <option value="Israel" id="IL">Israel</option>
                    <option value="Italia" id="IT">Italia</option>
                    <option value="Jamaica" id="JM">Jamaica</option>
                    <option value="Japón" id="JP">Japón</option>
                    <option value="Jordania" id="JO">Jordania</option>
                    <option value="Kazajistán" id="KZ">Kazajistán</option>
                    <option value="Kenia" id="KE">Kenia</option>
                    <option value="Kirguizistán" id="KG">Kirguizistán</option>
                    <option value="Kiribati" id="KI">Kiribati</option>
                    <option value="Kuwait" id="KW">Kuwait</option>
                    <option value="Laos" id="LA">Laos</option>
                    <option value="Lesoto" id="LS">Lesoto</option>
                    <option value="Letonia" id="LV">Letonia</option>
                    <option value="Líbano" id="LB">Líbano</option>
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
                    <option value="Malí" id="ML">Malí</option>
                    <option value="Malta" id="MT">Malta</option>
                    <option value="Marruecos" id="MA">Marruecos</option>
                    <option value="Martinica" id="MQ">Martinica</option>
                    <option value="Mauricio" id="MU">Mauricio</option>
                    <option value="Mauritania" id="MR">Mauritania</option>
                    <option value="Mayotte" id="YT">Mayotte</option>
                    <option value="México" id="MX">México</option>
                    <option value="Micronesia" id="FM">Micronesia</option>
                    <option value="Moldavia" id="MD">Moldavia</option>
                    <option value="Mónaco" id="MC">Mónaco</option>
                    <option value="Mongolia" id="MN">Mongolia</option>
                    <option value="Montserrat" id="MS">Montserrat</option>
                    <option value="Mozambique" id="MZ">Mozambique</option>
                    <option value="Namibia" id="NA">Namibia</option>
                    <option value="Nauru" id="NR">Nauru</option>
                    <option value="Nepal" id="NP">Nepal</option>
                    <option value="Nicaragua" id="NI">Nicaragua</option>
                    <option value="Níger" id="NE">Níger</option>
                    <option value="Nigeria" id="NG">Nigeria</option>
                    <option value="Niue" id="NU">Niue</option>
                    <option value="Norfolk" id="NF">Norfolk</option>
                    <option value="Noruega" id="NO">Noruega</option>
                    <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
                    <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
                    <option value="Omán" id="OM">Omán</option>
                    <option value="Panamá" id="PA">Panamá</option>
                    <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
                    <option value="Paquistán" id="PK">Paquistán</option>
                    <option value="Paraguay" id="PY">Paraguay</option>
                    <option value="Perú" id="PE">Perú</option>
                    <option value="Pitcairn" id="PN">Pitcairn</option>
                    <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
                    <option value="Polonia" id="PL">Polonia</option>
                    <option value="Portugal" id="PT">Portugal</option>
                    <option value="Puerto Rico" id="PR">Puerto Rico</option>
                    <option value="Qatar" id="QA">Qatar</option>
                    <option value="Reino Unido" id="UK">Reino Unido</option>
                    <option value="República Centroafricana" id="CF">República Centroafricana</option>
                    <option value="República Checa" id="CZ">República Checa</option>
                    <option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
                    <option value="República Democrática del Congo Zaire" id="CD">República Democrática del Congo Zaire</option>
                    <option value="República Dominicana" id="DO">República Dominicana</option>
                    <option value="Reunión" id="RE">Reunión</option>
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
                    <option value="Santa Lucía" id="LC">Santa Lucía</option>
                    <option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
                    <option value="Senegal" id="SN">Senegal</option>
                    <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
                    <option value="Sychelles" id="SC">Seychelles</option>
                    <option value="Sierra Leona" id="SL">Sierra Leona</option>
                    <option value="Singapur" id="SG">Singapur</option>
                    <option value="Siria" id="SY">Siria</option>
                    <option value="Somalia" id="SO">Somalia</option>
                    <option value="Sri Lanka" id="LK">Sri Lanka</option>
                    <option value="Suazilandia" id="SZ">Suazilandia</option>
                    <option value="Sudán" id="SD">Sudán</option>
                    <option value="Suecia" id="SE">Suecia</option>
                    <option value="Suiza" id="CH">Suiza</option>
                    <option value="Surinam" id="SR">Surinam</option>
                    <option value="Svalbard" id="SJ">Svalbard</option>
                    <option value="Tailandia" id="TH">Tailandia</option>
                    <option value="Taiwán" id="TW">Taiwán</option>
                    <option value="Tanzania" id="TZ">Tanzania</option>
                    <option value="Tayikistán" id="TJ">Tayikistán</option>
                    <option value="Territorios británicos del océano Indico" id="IO">Territorios británicos del océano Indico</option>
                    <option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
                    <option value="Timor Oriental" id="TP">Timor Oriental</option>
                    <option value="Togo" id="TG">Togo</option>
                    <option value="Tonga" id="TO">Tonga</option>
                    <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
                    <option value="Túnez" id="TN">Túnez</option>
                    <option value="Turkmenistán" id="TM">Turkmenistán</option>
                    <option value="Turquía" id="TR">Turquía</option>
                    <option value="Tuvalu" id="TV">Tuvalu</option>
                    <option value="Ucrania" id="UA">Ucrania</option>
                    <option value="Uganda" id="UG">Uganda</option>
                    <option value="Uruguay" id="UY">Uruguay</option>
                    <option value="Uzbekistán" id="UZ">Uzbekistán</option>
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
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Arma asignada</label>
                        <input type="text" class="form-control" id="arma" name="dni" required>
                    </div>
                <br>
                <button class="btn btn-primary" type="submit" id="submitA" style="cursor: pointer;border-radius:  10px;">Agregar</button>
                <div style="padding-left:20px">
                <a class="btn btn-secondary" style="cursor: pointer;border-radius:  10px;" href="admin.php">Volver al inicio</a></div>
            </form>
 </div>
    </div>
  </div>
</div>

</html>