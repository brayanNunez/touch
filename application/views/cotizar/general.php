<!-- START CONTENT -->
 <section id="content">

    <!--start container-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title"><?=label('tituloCotizacion');?></a></h5>
                
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->




    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12 m12 l12">

                    <div id="submit-button" class="section">
                        <div class="row">
                            
                            <div class="col s12 m12 l12">
                              <!-- <div class="card"> -->

                                <!--Basic Form-->
                                  <div id="formGeneral" class="section">
                                    
                                    <div class="row">
                                          <div class="input-field col s6 m3 l3">
                                            <div class="input-field col s12">
                                              <input id="last_name" type="text">
                                              <label for="last_name" class="">Código</label>
                                            </div>
                                          
                                           </div> 
                                          
                                          <div class="input-field col s6 m3 l3">
                                            <div class="input-field col s12">
                                              <input id="last_name" type="text">
                                              <label for="last_name" class="">Número</label>
                                            </div>
                                          
                                           </div> 
                                    </div>




                                    <div class="row">
                                          <div class="input-field col s12 m6 l6">
                                            <select class="input-field col s12">
                                              <option value="" disabled selected>Cliente</option>
                                              <option value="1">Dos Pinos</option>
                                              <option value="2">Juan Carlos Porras</option>
                                              <option value="3">Ana Bolaños Rojas</option>
                                            </select>
                                            <label>Seleccione el cliente</label>
                                            
                                          </div>  
                                          
                                          <div class="input-field col s12 m6 l6">
                                            <div class="input-field col s12">
                                              <input id="last_name" type="text">
                                              <label for="last_name" class="">Utilidad</label>
                                            </div>
                                          
                                           </div> 
                                    </div>
                                    <div class="row">
                                          <div class="input-field col s12 m6 l6">
                                            <select class="input-field col s11">
                                              <option value="" disabled selected>Atención</option>
                                              <option value="1">Sebastián Rodriguez Bolaños</option>
                                              <option value="2">Juan Carlos Porras</option>
                                              <option value="3">Ana Bolaños Rojas</option>
                                            </select>
                                            <label>Seleccione la atención</label>
                                            <a class="modal-trigger" href="#agregarAtencion"><i class="mdi-content-add col s1"></i></a>
                                            
                                            
                                          </div>  
                                          
                                          <div class="input-field col s12 m6 l6">
                                            <div class="input-field col s12">
                                              <input id="last_name" type="text">
                                              <label for="last_name" class="">Impuesto</label>
                                            </div>
                                          
                                           </div> 
                                    </div>


                                    <div class="row">
                                          <div class="input-field col s12 m6 l6">
                                            <select class="input-field col s12">
                                              <option value="" disabled selected>Moneda</option>
                                              <option value="1">Dolar</option>
                                              <option value="2">Colón</option>
                                              <option value="3">Peso mexicano</option>
                                            </select>
                                            <label>Seleccione el tipo de moneda</label>
                                            
                                          </div>  
                                          
                                          <div class="input-field col s12 m6 l6">
                                            <select class="input-field col s12">
                                              <option value="" disabled selected>Forma de pago</option>
                                              <option value="1">Credito</option>
                                              <option value="2">Al contado</option>
                                              <option value="3">50-50</option>
                                            </select>
                                            <label>Seleccione la forma de pago</label>
                                            
                                          </div>  
                                    </div>

                                   <div class="row">
                                          
                                          <div class="input-field col s12 m6 l6">
                                            <select class="input-field col s12">
                                              <option value="" disabled selected>Valido por</option>
                                              <option value="1">1 mes</option>
                                              <option value="1">1.5 meses</option>
                                              <option value="2">2 meses</option>
                                              <option value="3">3 meses</option>
                                              <option value="3">4 meses</option>
                                              <option value="3">5 meses</option>
                                            </select>
                                            <label>Seleccione el tiempo de validez</label>
                                            
                                          </div>

                                          <div class="input-field col s12 m6 l6">
                                            <div class="input-field col s12">
                                              <input id="last_name" type="text">
                                              <label for="last_name" class="">Tipo de cambio</label>
                                          </div> 
                                          
                                            
                                    </div>

                                    <div class="row">
                                    <div class="input-field col s12 m12 l12">
                                      <div class="input-field col s12">
                                        <textarea id="message" class="materialize-textarea" style="height: 24px;"></textarea>
                                        <label for="message" class="">Detalle</label>
                                      </div>
                                      </div>
                                    </div>


                                    


                                </div>


                               </div>

                              </div>
                        <!-- </div> -->
                    </div>

                </div>
            </div>
        </div>
    </div>

<!--end container-->
</section>
<!-- END CONTENT-->





<!-- lista modals -->
    <div id="agregarAtencion" class="modal">
    <div class="modal-content">
      <div class="input-field col s12">
        <input id="client_code" type="text" value="">
        <label for="client_code">Nombre</label>
      </div>
      <div class="input-field col s12">
        <input id="client_code" type="text" value="">
        <label for="client_code">Correo</label>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
      <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
      
    </div>
  </div>

      
<!--Fin lista modals -->