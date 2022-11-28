$(document).ready(function() {
    console.log("jQuery is working");

    const buscarAlumno = "buscarAlumno";

//editar ofertas
$(document).on('click','#verMas',function (){
                     let dni = $(this).data('dni');
                     console.log(dni);

                     const url = "modulos/consultas.php";

                     const postData = {
                     	dni : dni,
                     	tipo : buscarAlumno

                     };

                $.post(url, postData, (response) => {
                        

                        const alumno = JSON.parse(response);
                    
                    	let template = `
							            
						<div class="modal" tabindex="-1">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title">Datos del Alumno</h5>
						        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						      </div>
						      <div class="modal-body">
						        Telefono del Alumno: <p>${alumno.telefono}</p>
						        Codigo Postal: <p>${alumno.cdPostal}</p>
						        Distrito: <p>${alumno.distrito}</p>
						         Domicilio: <p>${alumno.domicilio}</p>
						         Destino: <p>${alumno.destino}</p>
						        Comisaria de Destino: <p>${alumno.comisariaD}</p>
						        Secundario Completo?: <p>${alumno.secundario}</p>
						        Pais de Nacimiento: <p>${alumno.paisNacimiento}</p>
						        Arma Asignada: <p>${alumno.armaAsig}</p>

						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						      </div>
						    </div>
						  </div>
						</div>


                    	`;

                    	    $(template).modal("show");
                    
                    
                    });

				        
				                 
				        
			


                

                      

                   }); 
 }); 


